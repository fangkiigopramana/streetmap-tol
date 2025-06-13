<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Web GIS</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 600px;
        }

        .legend {
            background: white;
            padding: 10px;
            line-height: 1.5em;
            border-radius: 5px;
            box-shadow: 0 0 5px #888;
            font-size: 14px;
        }

        .legend i {
            width: 12px;
            height: 12px;
            float: left;
            margin-right: 8px;
            opacity: 0.8;
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">SIKAP</h1>
            </a>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>Pemetaan Potensi Bahaya Di Jalan Tol Palikanci</h1>
                        <p>Website ini menyajikan informasi pemetaan wilayah infrastruktur jalan beserta potensi bahaya
                            seperti rawan kecelakaan dan bencana.</p>
                        <div class="d-flex">
                            <a href="#footer" class="btn-get-started">Lihat Peta</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container" data-aos="zoom-in">

            </div>

        </section><!-- /Clients Section -->
    </main>

    <footer id="footer" class="footer">

        <div class="footer-newsletter">
            <div class="container">
                <h2>Peta Potensi Bahaya</h2>

                <label class="mb-4" for="kategoriFilter">Tampilkan Kategori:</label>
                <select id="kategoriFilter">
                    <option value="semua">Semua</option>
                    @foreach ($jenis as $j)
                        <option value="{{ $j->id }}">{{ $j->nama }}</option>
                    @endforeach
                </select>

                <div id="map"></div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p><strong class="px-1 sitename">WEB GIS</strong> <span>All Rights Reserved</span>
            </p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    {{-- Streetmap --}}
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        const lokasi = @json($lokasi);

        const map = L.map('map').setView([-6.5, 107.0], 8);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        const markers = [];

        function getMarkerColor(kategoriId) {
            switch (kategoriId) {
            @foreach ($jenis as $j)
                case {{ $j->id }}:
                return '{{ $j->warna }}';
            @endforeach
            default:
                return 'blue';
            }
        }

        function createMarker(data) {
            const icon = L.divIcon({
                className: 'custom-div-icon',
                html: `<div style="background:${getMarkerColor(data.id_jenis)};width:24px;height:24px;border-radius:50%;border:4px solid ${data.risk_level_color};box-shadow:0 0 4px #888;"></div>`,
                iconSize: [24, 24],
                iconAnchor: [12, 24],
                popupAnchor: [0, -24]
            });

            return L.marker([data.latitude, data.longitude], {
                    icon: icon
                })
                .bindPopup(`
                <img src='/storage/${data.gambar}' width='200' height='200'/>
                <br>
                <b>${data.jalan_tol}</b>
                <br>
                <b>Risk Level: ${data.risk_level}</b>
                <br>
                <span class='fst-italic mb-3'>${data.km}</span>
                <br>
                ${data.keterangan}
                `);
        }

        function renderMarkers(filter = 'semua') {
            markers.forEach(m => map.removeLayer(m));
            markers.length = 0;

            lokasi.forEach(data => {
                if (filter === 'semua' || data.id_jenis === parseInt(filter)) {
                    const marker = createMarker(data);
                    marker.addTo(map);
                    markers.push(marker);
                }
            });

            if (markers.length > 0) {
                map.fitBounds(markers.map(m => m.getLatLng()));
            }
        }


        // Event filter
        document.getElementById('kategoriFilter').addEventListener('change', (e) => {
            renderMarkers(e.target.value);
        });

        renderMarkers(); // Default: semua

        // Legenda
        const legend = L.control({
            position: 'topright'
        });
        legend.onAdd = function() {
            const div = L.DomUtil.create('div', 'legend');
            div.innerHTML += '<b>Kategori:</b><br>';
            @foreach ($jenis as $j)
            div.innerHTML += '<i style="background: {{ $j->warna }}; border: 2px solid white; border-radius: 50%; display: inline-block;"></i> {{ $j->nama }}<br>';
            @endforeach
            div.innerHTML += '<hr style="margin:6px 0;">';
            div.innerHTML += '<b>Risk Level:</b><br>';
            @foreach ($risk_levels as $risk_level)
            div.innerHTML += '<i style="background: white; border: 2px solid {{ $risk_level->color }}; border-radius: 50%; display: inline-block;"></i> {{ $risk_level->name }}<br>';
            @endforeach
            return div;
        };
        legend.addTo(map);
    </script>
    {{-- Streetmap --}}


</body>

</html>
