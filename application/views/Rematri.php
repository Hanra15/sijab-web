<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rematri extends MY_Controller
{
	public $dataparsing = array();

	function __construct()
	{
		parent::__construct();
		$this->load->model('ukur_model', 'ukur');
		$this->load->model('wilayah_model', 'wilayah');
		$this->load->model('penerima_model', 'penerima');
		$this->load->model('rematri_model', 'rematri');
		$this->load->model('user_model', 'user');
		$this->load->model('log_model', 'log_pmt');
		$this->load->helper('tgl_indonesia');
		// $this->load->library('My_PHPMailer');
		$this->load->library('pagination');
		$this->load->library('encrypt');
		$this->load->library(array('PHPExcel', 'PHPExcel/IOFactory'));
		$this->load->helper('download');
		if ($this->session->userdata('login') == false) {
			redirect('login');
		}
	}

	public function baru()
	{
		echo "sedang perbaikan";
		die;

		// $result=$this->wilayah->wilayah_list2('PROVINSI');

		// print_r($result);
		// exit();
		$this->dataparsing['subtitle'] = 'Tambah Data Rematri';
		$this->dataparsing['title'] = 'Tambah Data Rematri';
		$this->dataparsing['active_link'] = 'tambah_rematri';
		$this->dataparsing['in_edit'] = 0;
		$this->dataparsing['prov'] = '';
		$this->dataparsing['kab'] = '';
		$this->dataparsing['kec'] = '';
		$this->dataparsing['kel'] = '';
		$this->dataparsing['pkm'] = '';
		$this->js_wilayah = 1;
		//	$this->load->view('header_ppgbm');
		$this->renderViewSekolah('Rematri/rematri_add');
	}

	public function edit()
	{
		$id = $this->uri->segment(3, 0);
		$this->dataparsing['subtitle'] = 'Ubah Data Rematri';
		$this->dataparsing['title'] = 'Ubah Data Rematri';
		$this->dataparsing['active_link'] = 'tambah_rematri';
		$this->dataparsing['in_edit'] = 0;
		$this->js_wilayah = 1;
		$pnrm = $this->db->query('SELECT  a.*, e.id as PROV, SUBSTRING(d.id, 3, 2) as KAB, SUBSTRING(c.id, 5, 3) as KEC FROM simak.identitas_rematri a
            INNER JOIN db_depkesmas.puskesmas b ON a.PKM = b.id
            inner join simak.districts c on b.ID_KECAMATAN=c.id
            inner join simak.regencies d on c.regency_id=d.id
            inner join simak.provinces e on d.province_id=e.id where id_prim = "' . $id . '"')->row();

		$this->dataparsing['penerima'] = $pnrm;
		$this->dataparsing['prov'] = $pnrm->PROV;
		$this->dataparsing['kab'] = $pnrm->PROV . $pnrm->KAB;
		$this->dataparsing['kec'] = $pnrm->PROV . $pnrm->KAB . $pnrm->KEC;
		$this->dataparsing['kel'] = $pnrm->PROV . $pnrm->KAB . $pnrm->KEC . $pnrm->KEL;
		$this->dataparsing['pkm'] = $pnrm->PKM;
		$this->dataparsing['POSY'] = $pnrm->POSY;
		//		echo '<pre>';print_r($this->dataparsing);

		$this->renderViewSekolah('Rematri/rematri_edit');
	}

	public function rematri_save()
	{
		$post = $this->input->post();
		if ($post['sekolah'] == '') {
			echo '<script>if (confirm("Sekolah tidak boleh kosong !")) {window.history.back();}</script>';
		}
		$data = array(
			'KTP' => $post['KTP']
		);
		$hasil = $this->rematri->cek_id($data);
		if ($hasil->num_rows() <= 0) {
			$this->rematri->insert_identitas_rematri();
			echo '<script>if (confirm("Data Rematri Berhasil Di Masukkan")) {window.location = "' .
				base_url()
				. 'index.php/Rematri/daftar.html"}</script>';
		} else {
			echo '<script>if (confirm("Maaf Data dengan NIK ini Sudah Ada !")) {window.history.back();}</script>';
		}
	}

	public function rematri_update()
	{

		$ukurnya = date('Y-m-d', strtotime($this->input->post('TL')));
		$batas = date("Y-m-d");
		$awal = "1990-01-01";

		if (($ukurnya >= $awal) && ($ukurnya <= $batas)) {
			// 27 lengthnya
			$this->rematri->update_identitas_rematri();
			//die($this->db->last_query());
			$panjang_lahir = '';
			if ($this->input->post('TL') == '' || $this->input->post('TL') == null || $this->input->post('TL') <= 0) {
				$panjang_lahir = ' Panjang Lahir Belum di isi !!';
			}
			echo '<script>if (confirm("Data berhasil diupdate !' . $panjang_lahir . '")) {window.location = "' .
				base_url() . 'index.php/Rematri/daftar.html"}</script>';
		} else {
			echo '<script>alert ("Tanggal Pengukuran Tidak Boleh Lebih dari hari ini, cek lagi tanggal lahirnya !"); {history.back()}</script>';
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->rematri->delete_rematri($id);
		/*$KTPnya = $this->db->query('SELECT * FROM identitas where id_prim ="'.$id.'" ')->result();
		foreach ($KTPnya as $key => $value) {
			$KTP = $value->KTP;
		}*/
		//$this->penerima->deleteukur_byidd($KTP);
		redirect('Rematri/daftar');
	}

	public function ukur()
	{
		$this->dataparsing['subtitle'] = 'Pengukuran Rematri';
		$this->dataparsing['title'] = 'Pengukuran Rematri';
		$this->dataparsing['active_link'] = 'daftar';
		$id = $this->uri->segment(3);
		$this->dataparsing['penerima'] = $this->rematri->get_identitas($id);
		$sql = "SELECT * FROM rematri_ukur
				WHERE hapus='0' AND KTP = '" . $id . "' GROUP BY tanggal, KTP ORDER BY tanggal DESC ";
		$query = $this->db->query($sql);
		$data_ukur = $query->result();
		$this->dataparsing['listukur'] = $data_ukur;
		$this->dataparsing['in_edit'] = 0;

		$this->renderView('Rematri/rematri_ukur');
	}

	public function save_ukur()
	{

		$datapost = $this->input->post();
		$simpan_data = array(
			'KTP' => $this->input->post('KTP', TRUE),
			'tanggal' => sqlDate($this->input->post('tanggal', TRUE)),
			'bb' => $this->input->post('bb', TRUE),
			'tb' => $this->input->post('tb', TRUE),
			'hb' => $this->input->post('hb', TRUE),
			'prop' => $this->input->post('PROP', TRUE),
			'kab' => $this->input->post('KAB', TRUE),
			'kec' => $this->input->post('KEC', TRUE),
			'kel' => $this->input->post('KEL', TRUE),
			'pkm' => $this->input->post('PKM', TRUE),
			'posy' => $this->input->post('POSY', TRUE),
		);

		$kirim = $this->db->insert('rematri_ukur', $simpan_data);
		$idukur = $this->db->insert_id();
		echo '<script>if (confirm("Data Berhasil Di Simpan.")) {window.location = "' . base_url() . 'index.php/rematri/ukur/' . $this->input->post('KTP', TRUE) . '.html"}</script>';
	}

	public function hapus_ukur()
	{
		$id = $this->uri->segment(3);
		$ktp = $this->uri->segment(4);

		$this->rematri->delete_ukur($id);
		redirect('rematri/ukur/' . $ktp);
	}

	public function daftar()
	{
		// if($this->session->userdata('login_pkm')==null){
		// 	$this->daftar_old();
		// }else {
		$this->daftar_old();
		// }
	}

	public function daftar_old()
	{
		$dataparsing['base_url'] = base_url();
		$dataparsing['subtitle'] = 'Daftar Remaja Putri';
		$dataparsing['active_link'] = 'daftar_rematri';
		$dataparsing['jns_label'] = 'Daftar Remaja Putri';
		$dataparsing['color'] = 'green';
		$datapost = $this->input->post();
		$dataparsing['cari'] = '';
		$dataparsing['not_found'] = '';
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : '';
		if (isset($datapost['cari'])) {
			$dataparsing['cari'] = '1';
			$dataparsing['nama'] = $datapost['nama'];
			$dataparsing['no_ktp'] = $datapost['nik'];
			$dataparsing['nik'] = $datapost['nik'];
			$dataparsing['prov'] = (isset($datapost['prov'])) ? $datapost['prov'] : '';
			$dataparsing['kab'] = (isset($datapost['kab'])) ? $datapost['kab'] : '';
			$dataparsing['kec'] = (isset($datapost['kec'])) ? $datapost['kec'] : '';
			$dataparsing['pkm'] = (isset($datapost['pkm'])) ? $datapost['pkm'] : '';
			$dataparsing['kel'] = (isset($datapost['kel'])) ? $datapost['kel'] : '';
			$dataparsing['POSY'] = (isset($datapost['POSY'])) ? $datapost['POSY'] : '';
			$dataparsing['usia'] = (isset($datapost['usia'])) ? $datapost['usia'] : '';
			// $dataparsing['sekolah'] = $datapost['sekolah'];
			$this->session->set_userdata([
				'prov_print' => $dataparsing['prov'],
				'kab_print' => $dataparsing['kab'],
				'kec_print' => $dataparsing['kec'],
				'pkm_print' => $dataparsing['pkm'],
				'kel_print' => $dataparsing['kel'],
				'POSY_print' => $dataparsing['POSY'],
				'usia_print' => $dataparsing['usia'],
				'nama_print' => $dataparsing['nama'],
				'nik_print' => $dataparsing['nik']
			]);

			$config['base_url'] = base_url() . 'index.php/Rematri/daftar/';
			$config['total_rows'] = $this->rematri->datalist_count($dataparsing);
			$config['per_page'] = 10;
			$config["uri_segment"] = 3;
			$config['full_tag_open'] = '<ul class="pagination" style="margin:0 0 0 10px" >';
			$config['full_tag_close'] = '</ul>';
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['first_link'] = '«';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = '»';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = false;
			$config['prev_link'] = false;
			$this->pagination->initialize($config);
			$dataparsing['total_rows'] = $config['total_rows'];
			$dataparsing['page'] = 0;
			$dataparsing['per_page'] = $config['per_page'];
			$dataparsing['paging'] = $this->pagination->create_links();
			$dataparsing['datalist'] = $this->rematri->datalist($dataparsing);
			//die($this->db->last_query());
		} else if ($page != '') {
			$dataparsing['cari'] = '1';
			$dataparsing['nama'] = $this->session->userdata('nama_print');
			$dataparsing['no_ktp'] = $this->session->userdata('nik_print');
			$dataparsing['nik'] = $this->session->userdata('nik_print');
			$dataparsing['prov'] = $this->session->userdata('prov_print');
			$dataparsing['kab'] = $this->session->userdata('kab_print');
			$dataparsing['kec'] = $this->session->userdata('kec_print');
			$dataparsing['pkm'] = $this->session->userdata('pkm_print');
			$dataparsing['kel'] = $this->session->userdata('kel_print');
			$dataparsing['POSY'] = $this->session->userdata('POSY_print');
			$dataparsing['usia'] = $this->session->userdata('usia_print');
			$dataparsing['sekolah'] = $datapost['sekolah'];
			$config['base_url'] = base_url() . 'index.php/Rematri/daftar/';
			$config['total_rows'] = $this->rematri->datalist_count($dataparsing);
			$config['per_page'] = 10;
			$config["uri_segment"] = 3;
			$config['full_tag_open'] = '<ul class="pagination" style="margin:0 0 0 10px" >';
			$config['full_tag_close'] = '</ul>';
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['first_link'] = '«';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = '»';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = false;
			$config['prev_link'] = false;
			$this->pagination->initialize($config);
			$dataparsing['total_rows'] = $config['total_rows'];
			$dataparsing['page'] = ($page != 1) ? $page : 0;
			$dataparsing['per_page'] = $config['per_page'];
			$dataparsing['paging'] = $this->pagination->create_links();
			$dataparsing['datalist'] = $this->rematri->datalist($dataparsing);
		} else {
			$dataparsing['cari'] = '0';
			$dataparsing['nama'] = '';
			$dataparsing['nik'] = '';
			$dataparsing['paging'] = '';
			$dataparsing['prov'] = '';
			$dataparsing['kab'] = '';
			$dataparsing['kec'] = '';
			$dataparsing['pkm'] = '';
			$dataparsing['kel'] = '';
			$dataparsing['usia'] = '';
			$dataparsing['sekolah'] = $datapost['sekolah'];
		}

		// echo "<pre>";
		// var_dump($dataparsing['datalist']);
		// die;

		$this->load->view('header_ppgbm', $dataparsing);
		$this->load->view('Rematri/rematri_list_old', $dataparsing);
		$this->load->view('footer', $dataparsing);
		$this->load->view('js_wilayah', $dataparsing);
	}

	public function print_daftar_old()
	{
		$dataparsing['cari'] = '1';
		$dataparsing['nama'] = $this->session->userdata('nama_print');
		$dataparsing['no_ktp'] = $this->session->userdata('nik_print');
		$dataparsing['nik'] = $this->session->userdata('nik_print');
		$dataparsing['prov'] = $this->session->userdata('prov_print');
		$dataparsing['kab'] = $this->session->userdata('kab_print');
		$dataparsing['kec'] = $this->session->userdata('kec_print');
		$dataparsing['pkm'] = $this->session->userdata('pkm_print');
		$dataparsing['kel'] = $this->session->userdata('kel_print');
		$dataparsing['POSY'] = $this->session->userdata('POSY_print');
		$dataparsing['usia'] = $this->session->userdata('usia_print');
		$dataparsing['sekolah'] = $datapost['sekolah'];
		$dataparsing['datalist'] = $this->rematri->datalist_print($dataparsing);

		$this->load->view('Rematri/rematri_list_old_print.php', $dataparsing);
	}
}
