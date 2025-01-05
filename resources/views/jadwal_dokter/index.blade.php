<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Sehat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .filter-container {
            background-color: #f8f9fa;
            /* Light gray background */
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .filter-container .form-select {
            width: 100%;
        }

        .filter-container .btn-success {
            margin-top: 10px;
        }

        .doctor-card {
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        .doctor-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 1rem;
            float: left;
        }

        .doctor-info {
            margin-left: 90px;
            /* Adjust for doctor image width */
        }

        .specialty {
            color: #3498db;
            /* Example color */
            font-weight: bold;
        }

        .btn-chat {
            margin-top: 1rem;
        }

        .day-container {
            border-right: 1px solid #ccc;
            text-align: center;
            padding: 10px;
        }

        .day-container:last-child {
            border-right: none;
        }

        .badge {
            margin-top: 5px;
            display: block;
        }

        .dropdown-menu {
            padding: 0;
        }

        .jadwal-dokter {
            display: none;

        }

        .day-container {
            border-right: 1px solid #ccc;
            text-align: center;
            padding: 10px;
        }

        .day-container:last-child {
            border-right: none;
        }

        .badge {
            margin-top: 5px;
            display: block;
        }

        .dropdown-menu {
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="bg-light py-3">
            <h1 class="text-center">Bandung Sehat</h1>
        </header>

        <div class="row">
            <div class="col-12">
                <div class="filter-container">
                    <div class="mb-3">
                        <select class="form-select">
                            <option>Pilih Semua Spesialis</option>
                            <option>Spesialis Anak</option>
                            <option>Spesialis Umum</option>
                            <option>Spesialis Penyakit Dalam</option>
                            <option>Spesialis Jantung dan Pembuluh Darah</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Cari Dokter">
                    </div>
                    <button class="btn btn-success">Cari Dokter</button>
                </div>
            </div>
            <div class="col-12 doctor-list-container">
                <h2>Daftar Dokter</h2>
                <div class="doctor-card p-3">
                    <img class="doctor-img img-fluid rounded-circle me-3 float-start" src="images/nasywa.jpg" alt="Dr. Nasywa">
                    <div class="doctor-info">
                        <p class="specialty mb-1"> Spesialis Jantung dan Pembuluh Darah</p>
                        <p>dr. Nasywa Afifah Wijaya., Sp.JP</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="dropdown mt-2">
                        <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            Lihat Jadwal Dokter
                        </button>
                        <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton3">
                            <!-- Jadwal Dokter -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card p-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <p class="mb-0">Pilih jadwal konsultasi Anda dengan Dokter</p>
                                                <select class="form-select form-select-sm">
                                                    <option selected>Desember 2024</option>
                                                    <!-- Tambahkan bulan-bulan lainnya -->
                                                </select>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-light btn-sm" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                    </svg>
                                                </button>
                                                <div class="d-flex flex-wrap justify-content-center">
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Senin</p>
                                                        <p class="mb-0 fw-bold">17:00 - 19:00</p>
                                                    </div>
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Rabu</p>
                                                        <p class="mb-0 fw-bold">18:00 - 20:00</p>
                                                    </div>
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Jumat</p>
                                                        <p class="mb-0 fw-bold">18:00 - 20:00</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-light btn-sm" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <a href="https://api.whatsapp.com/send?phone=+628112900664&text=%0A%20%20%20%20%20%20%20%20%20Hallo%20Admin%2C%20saya%20memerlukan%20informasi%20untuk%20pemesanan%20paket%20Medical%20Check%20Up.%20Bisa%20dibantu%3F%0A%20%20%20%20%20%20%20%20 " class="btn btn-success mt-3">Buat Janji Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 doctor-list-container">
                <div class="doctor-card p-3">
                    <img class="doctor-img img-fluid rounded-circle me-3 float-start" src="images/mariska.jpg" alt="Dr. Mariska">
                    <div class="doctor-info">
                        <p class="specialty mb-1"> Spesialis Anak</p>
                        <p>dr. Mariska Diksy Yuniar, Sp.A</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="dropdown mt-2">
                        <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            Lihat Jadwal Dokter
                        </button>
                        <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton3">
                            <!-- Jadwal Dokter -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card p-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <p class="mb-0">Pilih jadwal konsultasi Anda dengan Dokter</p>
                                                <select class="form-select form-select-sm">
                                                    <option selected>Desember 2024</option>
                                                    <!-- Tambahkan bulan-bulan lainnya -->
                                                </select>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-light btn-sm" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                    </svg>
                                                </button>
                                                <div class="d-flex flex-wrap justify-content-center">
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Senin</p>
                                                        <p class="mb-0 fw-bold">17:00 - 19:00</p>
                                                    </div>
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Rabu</p>
                                                        <p class="mb-0 fw-bold">18:00 - 20:00</p>
                                                    </div>
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Jumat</p>
                                                        <p class="mb-0 fw-bold">18:00 - 20:00</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-light btn-sm" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <a href="https://api.whatsapp.com/send?phone=+628112900664&text=%0A%20%20%20%20%20%20%20%20%20Hallo%20Admin%2C%20saya%20memerlukan%20informasi%20untuk%20pemesanan%20paket%20Medical%20Check%20Up.%20Bisa%20dibantu%3F%0A%20%20%20%20%20%20%20%20 " class="btn btn-success mt-3">Buat Janji Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 doctor-list-container">
                <div class="doctor-card p-3">
                    <img class="doctor-img img-fluid rounded-circle me-3 float-start" src="images/teo.jpg" alt="Dr. Theodora">
                    <div class="doctor-info">
                        <p class="specialty mb-1"> Spesialis Umum</p>
                        <p>dr. Theodora Marshanda Siregar</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="dropdown mt-2">
                        <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            Lihat Jadwal Dokter
                        </button>
                        <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton3">
                            <!-- Jadwal Dokter -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card p-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <p class="mb-0">Pilih jadwal konsultasi Anda dengan Dokter</p>
                                                <select class="form-select form-select-sm">
                                                    <option selected>Desember 2024</option>
                                                    <!-- Tambahkan bulan-bulan lainnya -->
                                                </select>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-light btn-sm" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                    </svg>
                                                </button>
                                                <div class="d-flex flex-wrap justify-content-center">
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Senin</p>
                                                        <p class="mb-0 fw-bold">17:00 - 19:00</p>
                                                    </div>
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Rabu</p>
                                                        <p class="mb-0 fw-bold">18:00 - 20:00</p>
                                                    </div>
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Jumat</p>
                                                        <p class="mb-0 fw-bold">18:00 - 20:00</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-light btn-sm" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <a href="https://api.whatsapp.com/send?phone=+628112900664&text=%0A%20%20%20%20%20%20%20%20%20Hallo%20Admin%2C%20saya%20memerlukan%20informasi%20untuk%20pemesanan%20paket%20Medical%20Check%20Up.%20Bisa%20dibantu%3F%0A%20%20%20%20%20%20%20%20 " class="btn btn-success mt-3">Buat Janji Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 doctor-list-container">
                <div class="doctor-card p-3">
                    <img class="doctor-img img-fluid rounded-circle me-3 float-start" src="images/lala.jpg" alt="Dr. Syarifah">
                    <div class="doctor-info">
                        <p class="specialty mb-1"> Spesialis Penyakit Dalam</p>
                        <p>dr. Syarifah Nirmala Eka Putri, Sp.PD</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="dropdown mt-2">
                        <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            Lihat Jadwal Dokter
                        </button>
                        <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton3">
                            <!-- Jadwal Dokter -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card p-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <p class="mb-0">Pilih jadwal konsultasi Anda dengan Dokter</p>
                                                <select class="form-select form-select-sm">
                                                    <option selected>Desember 2024</option>
                                                    <!-- Tambahkan bulan-bulan lainnya -->
                                                </select>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-light btn-sm" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                    </svg>
                                                </button>
                                                <div class="d-flex flex-wrap justify-content-center">
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Senin</p>
                                                        <p class="mb-0 fw-bold">17:00 - 19:00</p>
                                                    </div>
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Rabu</p>
                                                        <p class="mb-0 fw-bold">18:00 - 20:00</p>
                                                    </div>
                                                    <div class="day-container px-2 text-center">
                                                        <p class="mb-1">Jumat</p>
                                                        <p class="mb-0 fw-bold">18:00 - 20:00</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-light btn-sm" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <a href="https://api.whatsapp.com/send?phone=+628112900664&text=%0A%20%20%20%20%20%20%20%20%20Hallo%20Admin%2C%20saya%20memerlukan%20informasi%20untuk%20pemesanan%20paket%20Medical%20Check%20Up.%20Bisa%20dibantu%3F%0A%20%20%20%20%20%20%20%20 " class="btn btn-success mt-3">Buat Janji Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>

                        </ul>
                    </div>
                </div>
            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
