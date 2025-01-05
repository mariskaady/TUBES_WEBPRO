<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;

        }

        .navbar {
            background-color: #0198f6;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .hero-image {
            position: relative;
            overflow: hidden;
            height: 500px;
            background-color: #333;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero-overlay h5 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .hero-overlay p {
            font-size: 1.2rem;
            margin: 0;
            font-weight: 500;
        }

        .card-section {
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-price {
            font-size: 1.5rem;
            color: #0198f6;
            font-weight: bold;
            margin: 10px 0;
        }

        .card ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .card ul li {
            margin-bottom: 5px;
        }

        .btn-primary {
            width: 100%;
            font-weight: bold;
        }

        .section-title {
            text-align: center;
            margin-top: 30px;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 40px;
        }

        footer {
            margin-top: 50px;
        }

        .icon-section {
            margin-top: 30px;
            text-align: center;
        }

        .icon-section img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
            border-radius: 50%;
            /* Membuat gambar berbentuk lingkaran */
            object-fit: cover;
            /* Memastikan gambar tetap terpusat */
        }

        .icon-section h5 {
            font-size: 1rem;
            margin-top: 10px;
        }
        iframe {
            border: 0;

        }

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bandung Sehat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#service">Medical Check-Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#spesialis">Spesialis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#alamat-kami">Alamat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jadwal.dokter.index') }}">Jadwal Dokter</a>
                    </li>
                    <li class="nav-item">
                        @if (auth()->check())
                        <a class="btn btn-primary nav-link" href="{{ route('login.pilihan') }}">Login</a>
                        @else
                        <a class="btn btn-primary nav-link" href="{{ route('login.pilihan') }}">Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <div class="hero-image">
        <img src="{{ asset('images/mcu01.jpg') }}" alt="Medical Check-Up" class="w-100">
        <div class="hero-overlay">
            <h5>Medical Check-Up</h5>
            <p>Jaga kesehatan Anda, karena pencegahan lebih baik daripada pengobatan!</p>
            <p>Segera lakukan medical check-up secara rutin untuk mendeteksi dini berbagai masalah kesehatan.</p>
        </div>
    </div>

    <!-- Icon Section -->
    <div class="container icon-section" style="margin-top: -100px; padding-top: 120px;">
        <div class="row m-0">
            <div class="col-md-3 p-2 text-center">
                <img src="{{ asset('images/laboratorium.jpg') }}" alt="Laboratorium" class="img-fluid">
                <h5>Laboratorium Berkualitas Tinggi</h5>
            </div>
            <div class="col-md-3 p-2 text-center">
                <img src="{{ asset('images/tenaga ahli.jpg') }}" alt="Tenaga Ahli" class="img-fluid">
                <h5>Tenaga Ahli Profesional</h5>
            </div>
            <div class="col-md-3 p-2 text-center">
                <img src="{{ asset('images/hasil.jpg') }}" alt="Hasil Akurat" class="img-fluid">
                <h5>Hasil Tepat dan Akurat</h5>
            </div>
            <div class="col-md-3 p-2 text-center">
                <img src="{{ asset('images/tenaga kesehatan.jpg') }}" alt="Tenaga Kesehatan" class="img-fluid">
                <h5>Tenaga Kesehatan Terampil</h5>
            </div>
        </div>
    </div>


    <section class="container mt-5" id="spesialis">
        <h2 class="section-title">Spesialis</h2>
        <div class="row">
            <!-- Specialist Cards -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <a href="{{ route('jadwal.dokter.anak') }}" class="text-dark text-decoration-none">Anak</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <a href="{{ route('jadwal.dokter.penyakit_dalam') }}" class="text-dark text-decoration-none">Penyakit Dalam</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <a href="{{ route('jadwal.dokter.jantung') }}" class="text-dark text-decoration-none">Jantung & Pembuluh Darah</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <a href="{{ route('jadwal.dokter.umum') }}" class="text-dark text-decoration-none">Umum</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <a href="{{ route('jadwal.dokter.paru') }}" class="text-dark text-decoration-none">Paru</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <a href="{{ route('jadwal.dokter.jiwa') }}" class="text-dark text-decoration-none">Kedokteran Jiwa / Psikiater</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Jenis Pemeriksaan -->
    <section id="service">
        <h2 class="section-title">Layanan Unggulan Medical Check Up</h2>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Paket Thorax -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/gambar thorax.jpg') }}" class="card-img-top" alt="Thorax Package">
                        <div class="card-body">
                            <span class="badge bg-warning text-dark">Paling Favorit</span>
                            <h5 class="card-title mt-2">THORAX</h5>
                            <p class="text-primary fs-4 fw-bold">Rp 435.000</p>
                            <ul class="list-unstyled">
                                <li>✔ Pemeriksaan fisik oleh Dokter Umum</li>
                                <li>✔ Visual Assesment</li>
                                <li>✔ Radiologi: Rontgen Thorax dengan Interpretasi Radiologi</li>
                                <li>✔ Pemeriksaan Laboratorium:</li>
                                <ul>
                                    <li>Darah Lengkap</li>
                                    <li>Urine Lengkap</li>
                                    <li>Fungsi Hati: SGOT & SGPT</li>
                                    <li>Profil Lemak: Kolesterol Total</li>
                                    <li>Gula Darah: Gula Darah Puasa</li>
                                </ul>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('thorax.show') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Paket Abdomen -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/abdomen.jpg') }}" class="card-img-top" alt="Abdomen Check-Up">
                        <div class="card-body">
                            <span class="badge bg-info">Recommended</span>
                            <h5 class="card-title mt-2">ABDOMEN</h5>
                            <p class="text-primary fs-4 fw-bold">Rp 1.195.000</p>
                            <ul class="list-unstyled">
                                <li>✔ Pemeriksaan fisik oleh Dokter Umum</li>
                                <li>✔ Visual Assesment</li>
                                <li>✔ Radiologi: USG Abdomen</li>
                                <li>✔ Pemeriksaan Laboratorium:</li>
                                <ul>
                                    <li>SGOT, SGPT, GGT</li>
                                    <li>Profil Lemak: Kolesterol Total</li>
                                    <li>Gula Darah</li>
                                </ul>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('abdomen.show') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Paket Diabetes -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/diabetes.jpg') }}" class="card-img-top" alt="Diabetes Package">
                        <div class="card-body">
                            <h5 class="card-title">DIABETES</h5>
                            <p class="text-primary fs-4 fw-bold">Rp 595.000</p>
                            <ul class="list-unstyled">
                                <li>✔ Pemeriksaan fisik oleh Dokter Umum</li>
                                <li>✔ Visual Assesment</li>
                                <li>✔ Pemeriksaan Laboratorium:</li>
                                <ul>
                                    <li>Gula Darah Puasa & HbA1c</li>
                                    <li>Kolesterol Total</li>
                                </ul>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('diabetes.show') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Paket TBC -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/TBC.jpg') }}" class="card-img-top" alt="TBC Package">
                        <div class="card-body">
                            <h5 class="card-title">TBC</h5>
                            <p class="text-primary fs-4 fw-bold">Rp 695.000</p>
                            <ul class="list-unstyled">
                                <li>✔ Pemeriksaan fisik oleh Dokter Umum</li>
                                <li>✔ Visual Assesment</li>
                                <li>✔ Tes Sputum (Laboratorium)</li>
                                <li>✔ Rontgen Thorax</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('tbc.show') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Paket Skoliosis -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/skoliosis.jpg') }}" class="card-img-top" alt="Skoliosis Package">
                        <div class="card-body">
                            <h5 class="card-title">SKOLIOSIS</h5>
                            <p class="text-primary fs-4 fw-bold">Rp 595.000</p>
                            <ul class="list-unstyled">
                                <li>✔ Pemeriksaan fisik oleh Dokter Umum</li>
                                <li>✔ Visual Assesment</li>
                                <li>✔ Radiologi: Rontgen Skoliosis</li>
                                <li>✔ Pemeriksaan Laboratorium (opsional):</li>
                                <ul>
                                    <li>Darah Lengkap</li>
                                    <li>Urine Lengkap</li>
                                </ul>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('skoliosis.show') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="container mt-5" id="alamat-kami">
        <div class="card">
            <div class="text-center">
                <h2>Alamat Kami</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Temukan Lokasi Kami di Google Maps</h5>
                <p>Anda dapat mengunjungi kami di alamat berikut:</p>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.304448078361!2d107.62777107475753!3d-6.973362593027331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1735148684263!5m2!1sid!2sid" width="700" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p>Untuk informasi lebih lanjut, silakan hubungi kami melalui nomor telepon atau email yang tersedia di website kami.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <!-- Informasi Kontak -->
                <div class="col-md-4 mb-4">
                    <h5>Alamat</h5>
                    <p>Jl. Telekomunikasi No. 1, Bandung Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Telepon</h5>
                    <p>021 - 816164861</p>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Instagram</h5>
                    <p>@BandungSehat</p>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>WhatsApp</h5>
                    <p>0812 0481 9147</p>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Email</h5>
                    <p>info@bandungsehat.co.id</p>
                </div>
            </div>

            </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
