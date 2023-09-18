<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('../assets/img/background-hero.png');padding-bottom: 10px;padding-top: 90px;">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="fs-3"><?= $heading ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><?= $breadcrumb ?></li>
                </ol>
            </div>
        </nav> -->
    </div><!-- End Breadcrumbs -->
    <div class="button-navs">
        <button class="sidenav btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-info-circle-fill"></i></button>
        <button class="sidenav-right btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#trayekScrolling" aria-controls="trayekScrolling">
            <i class="bi bi-bus-front" style="background: white; color:green; padding: 1px 5px; border-radius:20px; font-size:25px"></i>
        </button>
    </div>


    <div id="map"></div>


</main><!-- End #main -->

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Panduan Pemakaian Peta Digital</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column">
        <p class="mb-0">SIJAB - Peta Digital Kota Bogor</p>
        <hr>
        <div class="accordion accordion-flush mb-auto" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Penggunaan Dasar
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="text-align: justify;">

                        <!-- routing -->
                        <h6>Routing</h6>
                        <img src="<?= base_url() ?>assets/img/panduan/route.png" alt="img" class="img-fluid">
                        <p>Digunakan untuk mencari tahu rute terdekat dari lokasi awal ke lokasi tujuan.</p>
                        <hr>

                        <!-- layer -->
                        <h6>Layer</h6>
                        <img src="<?= base_url() ?>assets/img/panduan/layer.png" alt="img" class="img-fluid">
                        <p>
                            Digunakan untuk memanipulasi konten pada peta, pengguna dapat melihat pelayanan lalu lintas di Kota Bogor seperti: <br>
                            melihat titik terminal, stasiun, halte bus, dan trayek angkutan umum <br>
                            Adapun pengguna dapat melihat titik polres, polsek, dan pos polisi pada peta.
                        </p>
                        <hr>

                        <!-- locate -->
                        <h6>Lokasi saat ini</h6>
                        <img src="<?= base_url() ?>assets/img/panduan/locate.png" alt="img" class="img-fluid">
                        <p>
                            Digunakan untuk melihat lokasi saat ini.
                        </p>
                        <hr>

                        <!-- zoom -->
                        <h6>Zoom</h6>
                        <img src="<?= base_url() ?>assets/img/panduan/zoom.png" alt="img" class="img-fluid">
                        <p>
                            Digunakan untuk memperbesar atau memperkecil jangkauan peta, pengguna dapat menggunakan tombol ini, ataupun dengan scroll pada mouse jika menggunakan pc atau menggunakan dua jari.
                        </p>
                        <hr>

                        <!-- fullscreen -->
                        <h6>Fullscreen</h6>
                        <img src="<?= base_url() ?>assets/img/panduan/fullscreen.png" alt="img" class="img-fluid">
                        <p>
                            Digunakan untuk melihat peta secara fullscreen.
                        </p>
                        <hr>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Mencari Jalur Alternatif
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="text-align: justify;">
                        <img src="<?= base_url() ?>assets/img/panduan/route.png" alt="route" class="img-fluid">
                        <p>Untuk mencari jalur alternatif pengguna dapat menggunakan fitur route pada peta. pengguna dapat melakukannya dengan 2 cara:</p>
                        <ol>
                            <li>cara pertama dengan mengisi lokasi awal dan tujuan pada form yang tersedia.</li>
                            <li>cara kedua dengan klik pada peta lalu pengguna dapat memilih titik tertentu sebagai titik awal ataupun titik tujuan.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Melihat CCTV
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="text-align: justify;">
                        <img src="<?= base_url() ?>assets/img/panduan/view-cctv.png" alt="view">
                        <p>Untuk melihat kondisi terkini lalu lintas melalui media CCTV pengguna dapat klik pada salah satu icon cctv seperti diatas lalu pengguna dapat melihat rekaman cctv secara real-time.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Melihat Trayek Angkutan Umum
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="text-align: justify;">
                        <img src="<?= base_url() ?>assets/img/panduan/view-trayek.png" alt="view">
                        <p>Untuk melihat trayek angkutan umum di Kota Bogor pada peta dapat mengaktifkan overlay trayek pada icon layer.</p>
                        <ul>
                            <li>Untuk melihat arah jalur tertentu pengguna dapat mengarahkan kursor diatas jalur.</li>
                            <li>Tahan klik kiri untuk lihat detail.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Legend Icon Map
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table table-responsive table-striped table-hover">
                            <thead>
                                <th>Icon</th>
                                <th style="width: 200px;">Deskripsi</th>
                            </thead>
                            <tbody class="table-hover">
                                <tr>
                                    <td>
                                        <img src="<?= base_url() ?>assets/img/cctv.png" alt="img" style="width: 110px;">
                                    </td>
                                    <td class="text-center p-5">Icon CCTV</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?= base_url() ?>assets/img/polres.png" alt="img" style="width: 110px;">
                                    </td>
                                    <td class="text-center p-5">Icon polres
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?= base_url() ?>assets/img/polsek.png" alt="img" style="width: 110px;">
                                    </td>
                                    <td class="text-center p-5">Icon polsek
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?= base_url() ?>assets/img/pos.png" alt="img" style="width: 110px;">
                                    </td>
                                    <td class="text-center p-5">Icon pos
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?= base_url() ?>assets/img/stasiun.png" alt="img" style="width: 110px;">
                                    </td>
                                    <td class="text-center p-5">Icon stasiun
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?= base_url() ?>assets/img/terminal.png" alt="img" style="width: 110px;">
                                    </td>
                                    <td class="text-center p-5">Icon terminal
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?= base_url() ?>assets/img/halte.png" alt="img" style="width: 110px;">
                                    </td>
                                    <td class="text-center p-5">Icon halte
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?= base_url() ?>assets/img/rest.png" alt="img" style="width: 110px;">
                                    </td>
                                    <td class="text-center p-5">Icon rest area
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#kontakDaruratmodal">
            Kontak Darurat
        </button>

    </div>
</div>

<!-- canvas trayek -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="trayekScrolling" aria-labelledby="trayekScrolling">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="trayekScrolling">Trayek Angkutan Umum</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <hr style="border: 5px dashed purple; opacity:0.45 !important">
        <h4 class="mb-0 text-center fw-bold my-3">BisKita</h4>
        <hr style="border: 5px solid purple; opacity:0.45 !important">
        <img src="<?= base_url() ?>assets/img/biskita.png" alt="">
        <?php
        foreach ($get_trayek as $trayek) :
            if ($trayek['category_trayek']['id'] == 2) :
        ?>

                <ul>
                    <li><b><?= $trayek['name_trayek'] ?></b> - <br><?= $trayek['route'] ?></li>
                </ul>
        <?php
            endif;
        endforeach;
        ?>

        <hr style="border: 5px dashed blue; opacity:0.45 !important">
        <h4 class="mb-0 text-center fw-bold my-3">Angkutan Kota (Angkot)</h4>
        <hr style="border: 5px solid blue; opacity:0.45 !important">
        <img src="<?= base_url() ?>assets/img/angkot.png" alt="">
        <?php
        foreach ($get_trayek as $trayek) :
            if ($trayek['category_trayek']['id'] == 1) :
        ?>

                <ul>
                    <li><b><?= $trayek['name_trayek'] ?></b> - <br><?= $trayek['route'] ?></li>
                </ul>

        <?php
            endif;
        endforeach;
        ?>



    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="kontakDaruratmodal" tabindex="-1" aria-labelledby="kontakDaruratmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="kontakDaruratmodalLabel">Kontak Darurat Petugas Lalu Lintas Kota Bogor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table datatable" id="datatable" style="width: 100%;">
                    <thead>
                        <th>No</th>
                        <th>Nama Instansi</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                    </thead>
                </table>
                <script>
                    $(document).ready(function() {
                        var fetchData = fetch("<?= base_url() ?>peta/serverSideTable").then(
                            response => response.json()
                        ).then(
                            data => {
                                // console.log(data);
                                if (!data.length) {
                                    return
                                }
                                var table = new DataTable("#datatable", {
                                    aLengthMenu: [
                                        [5, 10, 25, -1],
                                        [5, 10, 25, "All"]
                                    ],
                                    'iDisplayLength': 5,

                                    data: data.map(item => Object.values(item)),



                                })
                            }
                        )
                    })
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/js/kabbogor_polygon.js"></script>
<script src="<?= base_url() ?>assets/js/kotabogor_polygon.js"></script>
<script src="<?= base_url() ?>assets/js/jalur32.js"></script>

<script>
    // initialize the map on the "map" div with a given center and zoom
    const map = L.map('map', {
        gestureHandling: true,
        zoomControl: false,
        fullscreenControl: true,
        center: [-6.5901648, 106.7939541],
        zoom: 12.5,
        minZoom: 13
    });

    // check latlong
    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(map);
    }

    // map.on('click', onMapClick);

    // style component
    var kotaColor = {
        "color": "#001E36",
        "fill": 0,
        "fill-opacity": 0,
    }
    var kabColor = {
        "color": "#001E36",
    }
    var colorjalur32 = {
        "color": "#7E1717"
    }

    var icon_cctv = L.icon({
        iconUrl: '<?= base_url() ?>assets/img/cctv.png',
        iconSize: [25, 25],
        iconAnchor: [5, 10]
    })

    var icon_polsek = L.icon({
        iconUrl: '<?= base_url() ?>assets/img/polsek.png',
        iconSize: [45, 45],
        iconAnchor: [23, 25]
    })

    var icon_polres = L.icon({
        iconUrl: '<?= base_url() ?>assets/img/polres.png',
        iconSize: [45, 45],
        iconAnchor: [23, 25]
    })

    var icon_pos = L.icon({
        iconUrl: '<?= base_url() ?>assets/img/pos.png',
        iconSize: [35, 35],
        iconAnchor: [23, 25]
    })

    var icon_stasiun = L.icon({
        iconUrl: '<?= base_url() ?>assets/img/stasiun.png',
        iconSize: [35, 35],
        iconAnchor: [23, 25]
    })

    var icon_terminal = L.icon({
        iconUrl: '<?= base_url() ?>assets/img/terminal.png',
        iconSize: [35, 35],
        iconAnchor: [23, 25]
    })

    var icon_rest = L.icon({
        iconUrl: '<?= base_url() ?>assets/img/rest.png',
        iconSize: [35, 35],
        iconAnchor: [23, 25]
    })

    var icon_halte = L.icon({
        iconUrl: '<?= base_url() ?>assets/img/halte.png',
        iconSize: [35, 35],
        iconAnchor: [23, 25]
    })

    // batas wilayah

    // var kotaBogor = L.geoJSON(kotabogorpol, {
    //     style: kotaColor
    // }).addTo(map)

    var kotaBogor = L.geoJSON(kabbogorpol, {
        style: kabColor
    }).addTo(map)

    var jalur32 = L.geoJSON(jalur32, {
        style: colorjalur32
    })

    var traffic = MQ.trafficLayer({
        layers: ['flow']
    });
    traffic.addTo(map);

    var info = MQ.trafficLayer({
        layers: ['incident']
    })
    info.addTo(map)

    // layers
    var BaseMap = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {

        maxZoom: 20
    });
    BaseMap.addTo(map)

    var DarkBaseMap = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
        maxZoom: 20,

    });

    // google map layer
    // googleStreets = new L.Google('ROADMAP');
    googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    // googleStreets.addTo(map)

    googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    // googleHybrid.addTo(map)

    var trafficMutantRoad = L.gridLayer.googleMutant({
        maxZoom: 24,
        type: "roadmap",
    }).addGoogleLayer("TrafficLayer");

    var transitMutantRoad = L.gridLayer.googleMutant({
        maxZoom: 24,
        type: "roadmap",
    }).addGoogleLayer("TransitLayer");

    // control layer
    L.control.zoom({
        position: 'topright'
    }).addTo(map);

    var locate = L.control.locate({
        position: "topright",
        strings: {
            title: "Your Location"
        }
    }).addTo(map);

    // var routingJalur = L.Routing.control({
    //     show: false,
    //     draggableWaypoints: false,
    //     addWaypoints: false,
    //     waypoints: [
    //         L.latLng(-6.554891, 106.777668),
    //         L.latLng(-6.562519, 106.811013)
    //     ]
    // }).addTo(map)

    var randomColor = Math.floor(Math.random() * 16777215).toString(16);

    var routeTrayek = L.layerGroup();
    var routeTrayekBis = L.layerGroup();
    var routeTrayekAngkot = L.layerGroup();
    var router = []
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Peta/getTrayek",
            dataType: "JSON",
            success: function(result) {
                ressData = result
                for (let i = 0; i < ressData.length; i++) {
                    options = JSON.parse(ressData[i].option);
                    name = ressData[i].name_trayek
                    region = ressData[i].region
                    rute = ressData[i].route
                    // console.log(options[0].latLng);
                    var router = L.Routing.osrmv1(),
                        waypoints = [],
                        line;
                    for (let j = 0; j < options.length; j++) {
                        waypoints.push({
                            latLng: L.latLng(options[j].latLng)
                        });
                    }
                    router.route(waypoints, function(err, routes) {
                        // console.log(routes);
                        if (ressData[i].category_trayek.id == 2) {
                            var line = L.Routing.line(routes[0], {
                                styles: [{
                                    color: 'black',
                                    opacity: 0.15,
                                    weight: 10,
                                    className: 'animateRoute'

                                }, {
                                    color: 'white',
                                    opacity: 0.5,
                                    weight: 7,
                                    className: 'animateRoute'
                                }, {
                                    // color: `#` + randomColor,
                                    color: 'purple',
                                    opacity: 0.35,
                                    weight: 5,
                                    className: 'animateRoute'
                                }]
                            })
                            var bis = line
                        } else {
                            var line = L.Routing.line(routes[0], {
                                styles: [{
                                    color: 'black',
                                    opacity: 0.15,
                                    weight: 7,
                                    className: 'animateRoute'
                                }, {
                                    color: 'white',
                                    opacity: 0.5,
                                    weight: 5,
                                    className: 'animateRoute'
                                }, {
                                    // color: `#` + randomColor,
                                    color: 'blue',
                                    opacity: 0.35,
                                    weight: 4,
                                    className: 'animateRoute'
                                }]
                            })
                            var angkot = line
                        }
                        line.on("linetouched", function(e) {
                            if (ressData[i].category_trayek.id == 2) {
                                // console.log(ressData[i]);
                                nameBis = ressData[i].name_trayek
                                regionBis = ressData[i].region
                                ruteBis = ressData[i].route
                                imageBis = ressData[i].image_trayek
                                var popupss = L.popup()
                                    .setLatLng(e.latlng)
                                    .setContent(`
                                        <div class="" style="width: 300px">
                                        <h5 class="text-center mt-3">${nameBis}</h5>
                                        <hr class="my-1">
                                        <img class="img-fluid" src="<?= url_api() ?>${imageBis}">
                                        <p class="text-center my-2">${regionBis}</p>
                                        <p class="text-center my-2">${ruteBis}</p>
                                        </div>
                                        `)
                                    .openOn(map);
                            } else {
                                nameangkot = ressData[i].name_trayek
                                regionangkot = ressData[i].region
                                ruteangkot = ressData[i].route
                                imageAngkot = ressData[i].image_trayek
                                var popupss = L.popup()
                                    .setLatLng(e.latlng)
                                    .setContent(`
                                        <div class="" style="width: 300px">
                                        <h5 class="text-center mt-3">${nameangkot}</h5>
                                        <hr class="my-1">
                                        <img class="img-fluid" src="<?= url_api() ?>${imageAngkot}">
                                        <p class="text-center my-2">${regionangkot}</p>
                                        <p class="text-center my-2">${ruteangkot}</p>
                                        </div>
                                        `)
                                    .openOn(map);
                            }
                        })
                        routeTrayek.addLayer(line)
                        if (ressData[i].category_trayek.id == 2) {
                            routeTrayekBis.addLayer(bis)
                        } else {
                            routeTrayekAngkot.addLayer(angkot)
                        }

                    });
                    // console.log(waypoints);

                }

            }
        })
    })


    var route = L.Routing.control({
        position: 'topleft',
        showAlternatives: true,
        collapsible: true,
        collapsed: true,
        reverseWaypoints: true,
        lineOptions: {
            styles: [{
                color: 'blue',
                opacity: 0.4,
                weight: 4,

            }],

        },
        altLineOptions: {
            styles: [{
                color: 'grey',
                opacity: 0.6,
                weight: 4,
            }],
        },
        style: {
            'z-index': 0
        },
        waypoints: [
            // L.latLng(60.323935, 22.344035)


        ],

        geocoder: L.Control.Geocoder.nominatim()
        // geocoder: L.Control.Geocoder.google('AIzaSyAk5aBw69zZTlOgfVL5PMkKyhRlx1F30UI')

    }).addTo(map);



    // cctv

    var cctv_bogor = L.markerClusterGroup({
        iconCreateFunction: function(cluster) {
            return new L.DivIcon({
                html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#3b5059;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="bi bi-webcam"></i>${cluster.getChildCount()}</b>
                </div>`
            });
        }
    });
    var cctv = [];
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Peta/getCCTV",
            dataType: "JSON",
            success: function(result) {
                let ressData = result;
                // console.log(ressData.length);
                for (let i = 0; i < ressData.length; i++) {
                    if (ressData[i].link_cctv.includes('https://restreamer.kotabogor.go.id/')) {
                        id = i;
                        // console.log(id);
                        var name = ressData[i].name_cctv;
                        var address = ressData[i].address_cctv;
                        var latitude = parseFloat(ressData[i].lat_cctv);
                        var longitude = parseFloat(ressData[i].lng_cctv);
                        var refresh
                        var resource = `<video id="cctv-video-${ressData[i].id}" autoplay src="${ressData[i].link_cctv}" style="width:100%;height:250px" controls></video>`;

                        cctv[i] = L.marker([latitude, longitude], {
                            icon: icon_cctv,
                        }).on("popupopen", function(e) {
                            var videoUrl = `${ressData[i].link_cctv}`;
                            var video = document.getElementById(`cctv-video-${ressData[i].id}`);

                            if (Hls.isSupported()) {
                                var hls = new Hls();
                                hls.loadSource(videoUrl);
                                hls.attachMedia(video);
                            } else if (video.canPlayType("application/vnd.apple.mpegurl")) {
                                video.src = videoUrl;
                            } else {
                                video.innerHTML = "Maaf, browser Anda tidak mendukung pemutaran video.";
                            }
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                        ${resource}
                        <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                        <p class="text-center">${address}</p>
                        </div>
                        `);

                    } else {
                        id = i;
                        // console.log(id);
                        var name = ressData[i].name_cctv;
                        var address = ressData[i].address_cctv;
                        var latitude = parseFloat(ressData[i].lat_cctv);
                        var longitude = parseFloat(ressData[i].lng_cctv);
                        var refresh
                        var resource = `<img class="cctv-${id}" src="${ressData[i].link_cctv}" style="width:100%;height:250px" />`;

                        cctv[i] = L.marker([latitude, longitude], {
                            icon: icon_cctv,
                        }).on("popupopen", function(e) {
                            // console.log(e)
                            refresh = window.setInterval(function() {
                                var d = new Date();
                                // console.log("is refresh")
                                $(e.popup._contentNode).find('img').attr("src", ressData[i].link_cctv + '&time=' + d.getTime());
                            }, 250);
                        }).on("popupclose", function() {
                            clearInterval(refresh)
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                        <a href="${ressData[i].link_cctv}" target="_blank">${resource}</a>
                        <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                        <p class="text-center">${address}</p>
                        </div>
                        `);
                    }


                    cctv_bogor.addLayer(cctv[i]);
                };
            }
        })
    })
    map.addLayer(cctv_bogor);


    var polsek_bogor = L.layerGroup();
    var polres_bogor = L.layerGroup();
    var pos_bogor = L.markerClusterGroup({
        iconCreateFunction: function(cluster) {
            return new L.DivIcon({
                html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#83e69e;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#000;"><i class="bi bi-building-exclamation"></i> ${cluster.getChildCount()}</b>
                </div>`
            });
        }
    });
    var polsek = [];
    var polres = [];
    var pos = [];
    // Polantas Office
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Peta/getPolantas",
            dataType: "JSON",
            success: function(result) {
                let ressData = result;
                // console.log(ressData);
                for (let i = 0; i < ressData.length; i++) {
                    // polsek
                    if (ressData[i].category_polantas.id == 1) {
                        var name = ressData[i].name_polantas
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_polantas
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_polantas

                        polsek[i] = L.marker([latitude, longitude], {
                            icon: icon_polsek,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <a class="glightbox" href="<?= url_api() ?>${image}">
                                    <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
                                </a>
                            </div>
                            <p class="text-center">${address}</p>
                        <hr class="my-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Buka</b> : ${open}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Tutup</b> : ${close}</p>
                                </div>
                            </div>
                            <p class="text-center my-1"><b>Kontak</b> : <a href="tel:${contact}"><i class="bi bi-telephone-fill"></i> ${contact}</a></p>
                            <div class="text-center d-flex justify-content-evenly mt-2">
                                <button class="btn btn-primary" style="font-size:12px;" onclick="start(${latitude},${longitude})">Mulai dari lokasi ini</button>
                                <button class="btn btn-success" style="font-size:12px;" onclick="dest(${latitude},${longitude})">Menuju lokasi ini</button>
                            </div>
                        </div>
                        `);
                        polsek_bogor.addLayer(polsek[i]);
                        // console.log(ressData[i]);
                        // polres 
                    } else if (ressData[i].category_polantas.id == 2) {
                        var name = ressData[i].name_polantas
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_polantas
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_polantas

                        polres[i] = L.marker([latitude, longitude], {
                            icon: icon_polres,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <a class="glightbox" href="<?= url_api() ?>${image}">
                                    <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
                                </a>
                            </div>
                            <p class="text-center">${address}</p>
                        <hr class="my-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Buka</b> : ${open}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Tutup</b> : ${close}</p>
                                </div>
                            </div>
                            <p class="text-center my-1"><b>Kontak</b> : <a href="tel:${contact}"><i class="bi bi-telephone-fill"></i> ${contact}</a></p>
                            <div class="text-center d-flex justify-content-evenly mt-2">
                                <button class="btn btn-primary" style="font-size:12px;" onclick="start(${latitude},${longitude})">Mulai dari lokasi ini</button>
                                <button class="btn btn-success" style="font-size:12px;" onclick="dest(${latitude},${longitude})">Menuju lokasi ini</button>
                            </div>
                        </div>
                        `);
                        polres_bogor.addLayer(polres[i]);
                    } else if (ressData[i].category_polantas.id == 3) {
                        var name = ressData[i].name_polantas
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_polantas
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_polantas

                        pos[i] = L.marker([latitude, longitude], {
                            icon: icon_pos,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <a class="glightbox" href="<?= url_api() ?>${image}">
                                    <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
                                </a>
                            </div>
                            <p class="text-center">${address}</p>
                        <hr class="my-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Buka</b> : ${open}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Tutup</b> : ${close}</p>
                                </div>
                            </div>
                            <p class="text-center my-1"><b>Kontak</b> : <a href="tel:${contact}"><i class="bi bi-telephone-fill"></i> ${contact}</a></p>
                            <div class="text-center d-flex justify-content-evenly mt-2">
                                <button class="btn btn-primary" style="font-size:12px;" onclick="start(${latitude},${longitude})">Mulai dari lokasi ini</button>
                                <button class="btn btn-success" style="font-size:12px;" onclick="dest(${latitude},${longitude})">Menuju lokasi ini</button>
                            </div>
                        </div>
                        `);
                        pos_bogor.addLayer(pos[i]);
                    }


                }
            }
        })
    })

    var stasiun_bogor = L.layerGroup();
    var terminal_bogor = L.markerClusterGroup({
        iconCreateFunction: function(cluster) {
            return new L.DivIcon({
                html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#5bd779;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#000;"><i class="bi bi-bus-front-fill"></i> ${cluster.getChildCount()}</b>
                </div>`
            });
        }
    });
    var rest_bogor = L.layerGroup();
    var halte_bogor = L.markerClusterGroup({
        iconCreateFunction: function(cluster) {
            return new L.DivIcon({
                html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#007bb5;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="bi bi-bus-front"></i> ${cluster.getChildCount()}</b>
                </div>`
            });
        }
    });
    var stasiun = [];
    var terminal = [];
    var rest = [];
    var halte = [];
    // Polantas Office
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Peta/getFasum",
            dataType: "JSON",
            success: function(result) {
                let ressData = result;
                // console.log(ressData);
                for (let i = 0; i < ressData.length; i++) {
                    // stasiun
                    if (ressData[i].category_fasum.id == 2) {
                        var name = ressData[i].name_fasum
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_fasum
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_fasum

                        stasiun[i] = L.marker([latitude, longitude], {
                            icon: icon_stasiun,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <a class="glightbox" href="<?= url_api() ?>${image}">
                                    <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
                                </a>
                            </div>
                            <p class="text-center">${address}</p>
                        <hr class="my-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Buka</b> : ${open}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Tutup</b> : ${close}</p>
                                </div>
                            </div>
                            <p class="text-center my-1"><b>Kontak</b> : <a href="tel:${contact}"><i class="bi bi-telephone-fill"></i> ${contact}</a></p>
                            <div class="text-center d-flex justify-content-evenly mt-2">
                                <button class="btn btn-primary" style="font-size:12px;" onclick="start(${latitude},${longitude})">Mulai dari lokasi ini</button>
                                <button class="btn btn-success" style="font-size:12px;" onclick="dest(${latitude},${longitude})">Menuju lokasi ini</button>
                            </div>
                        </div>
                        `);
                        stasiun_bogor.addLayer(stasiun[i]);
                        // console.log(ressData[i]);
                        // terminal 
                    } else if (ressData[i].category_fasum.id == 1) {
                        var name = ressData[i].name_fasum
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_fasum
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_fasum

                        terminal[i] = L.marker([latitude, longitude], {
                            icon: icon_terminal,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <a class="glightbox" href="<?= url_api() ?>${image}">
                                    <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
                                </a>
                            </div>
                            <p class="text-center">${address}</p>
                        <hr class="my-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Buka</b> : ${open}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Tutup</b> : ${close}</p>
                                </div>
                            </div>
                            <p class="text-center my-1"><b>Kontak</b> : <a href="tel:${contact}"><i class="bi bi-telephone-fill"></i> ${contact}</a></p>
                            <div class="text-center d-flex justify-content-evenly mt-2">
                                <button class="btn btn-primary" style="font-size:12px;" onclick="start(${latitude},${longitude})">Mulai dari lokasi ini</button>
                                <button class="btn btn-success" style="font-size:12px;" onclick="dest(${latitude},${longitude})">Menuju lokasi ini</button>
                            </div>
                        </div>
                        `);
                        terminal_bogor.addLayer(terminal[i]);
                    } else if (ressData[i].category_fasum.id == 7) {
                        var name = ressData[i].name_fasum
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_fasum
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_fasum

                        rest[i] = L.marker([latitude, longitude], {
                            icon: icon_rest,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <a class="glightbox" href="<?= url_api() ?>${image}">
                                    <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
                                </a>
                            </div>
                            <p class="text-center">${address}</p>
                        <hr class="my-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Buka</b> : ${open}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Tutup</b> : ${close}</p>
                                </div>
                            </div>
                            <p class="text-center my-1"><b>Kontak</b> : <a href="tel:${contact}"><i class="bi bi-telephone-fill"></i> ${contact}</a></p>
                            <div class="text-center d-flex justify-content-evenly mt-2">
                                <button class="btn btn-primary" style="font-size:12px;" onclick="start(${latitude},${longitude})">Mulai dari lokasi ini</button>
                                <button class="btn btn-success" style="font-size:12px;" onclick="dest(${latitude},${longitude})">Menuju lokasi ini</button>
                            </div>
                        </div>
                        `);
                        rest_bogor.addLayer(rest[i]);
                    } else if (ressData[i].category_fasum.id == 8) {
                        var name = ressData[i].name_fasum
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_fasum
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_fasum

                        halte[i] = L.marker([latitude, longitude], {
                            icon: icon_halte,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <a class="glightbox" href="<?= url_api() ?>${image}">
                                    <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
                                </a>
                            </div>
                            <p class="text-center">${address}</p>
                        <hr class="my-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Buka</b> : ${open}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Tutup</b> : ${close}</p>
                                </div>
                            </div>
                            <p class="text-center my-1"><b>Kontak</b> : <a href="tel:${contact}"><i class="bi bi-telephone-fill"></i> ${contact}</a></p>
                            <div class="text-center d-flex justify-content-evenly mt-2">
                                <button class="btn btn-primary" style="font-size:12px;" onclick="start(${latitude},${longitude})">Mulai dari lokasi ini</button>
                                <button class="btn btn-success" style="font-size:12px;" onclick="dest(${latitude},${longitude})">Menuju lokasi ini</button>
                            </div>
                        </div>
                        `);
                        halte_bogor.addLayer(halte[i]);
                    }


                }
            }
        })
    })




    // layer control
    var baseLayers = {
        "Base Map": BaseMap,
        "Dark Base Map": DarkBaseMap,
        "Google Street": googleStreets,
        "Google Satelit": googleHybrid,
        "Google Traffic": trafficMutantRoad,
        // "Google Transit": transitMutantRoad,
    };

    var overlays = {

        "Traffic Flow": traffic,
        "All Trayek": routeTrayek,
        "Trayek BisKita": routeTrayekBis,
        "Trayek Angkot": routeTrayekAngkot,
        "Stasiun": stasiun_bogor,
        "Terminal": terminal_bogor,
        "Rest Area": rest_bogor,
        "Halte": halte_bogor,
        "Polres": polres_bogor,
        "Polsek": polsek_bogor,
        "Pos": pos_bogor,
        "CCTV": cctv_bogor,

    };

    L.control.layers(baseLayers, overlays, {

        position: 'topright',
        collapsed: true

    }).addTo(map);




    // custom heading layer
    $(".leaflet-control-layers-base").prepend("<hr class='my-1'>");
    $(".leaflet-control-layers-base").prepend("<label>Layer</label>");
    $(".leaflet-control-layers-overlays").prepend("<hr class='my-1'>");
    $(".leaflet-control-layers-overlays").prepend("<label>Overlay</label>");

    // document.getElementsByClass("leaflet-bottom leaflet-right").style.display = "flex"
    // document.getElementsByClassName("")

    //     $(".leaflet-bottom").attr("style='display:flex'");
    // $(".leaflet-right").attr("style='display:flex'");


    /*Legend specific*/
    var legend = L.control({
        position: "bottomleft"
    });

    legend.onAdd = function(map) {
        var div = L.DomUtil.create("div", "legend");
        div.innerHTML += "<h4>Live Traffic</h4>";
        div.innerHTML += "<i class='param-start'>fast</i>";
        div.innerHTML += '<i style="background: #bbe4c1"></i>';
        div.innerHTML += '<i style="background: #fbe07e"></i>';
        div.innerHTML += '<i style="background: #f9bfac"></i>';
        div.innerHTML += "<i class='param-end'>slow</i>";




        return div;
    };

    legend.addTo(map);

    function createButton(label, container) {
        var btn = L.DomUtil.create('button', '', container);
        btn.setAttribute('type', 'button');
        btn.innerHTML = label;
        return btn;
    }

    map.on('click', function(e) {
        var container = L.DomUtil.create('div');
        container.innerHTML += "<span>" + e.latlng.toString() + "<span><br>",
            startBtn = createButton('Mulai dari lokasi ini', container),
            destBtn = createButton('Menuju lokasi ini', container);


        L.popup()
            .setContent(container)
            .setLatLng(e.latlng)
            .openOn(map);

        L.DomEvent.on(startBtn, 'click', function() {
            console.log(e.latlng);
            route.spliceWaypoints(0, 1, e.latlng);
            map.closePopup();
        });

        L.DomEvent.on(destBtn, 'click', function() {
            route.spliceWaypoints(route.getWaypoints().length - 1, 1, e.latlng);
            map.closePopup();
        });
    });


    function start(lat, lng) {
        route.spliceWaypoints(0, 1, {
            lat: lat,
            lng: lng
        });
        map.closePopup();
    }

    function dest(lat, lng) {
        route.spliceWaypoints(route.getWaypoints().length - 1, 1, {
            lat: lat,
            lng: lng
        });
        map.closePopup();
    }
</script>