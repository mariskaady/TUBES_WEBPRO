<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Sehat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: sans-serif;
        }

        .container {
            max-width: 960px;
            margin: 20px auto;
        }

        .doctor-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            /* Center text within card */
        }

        .doctor-img-container {
            width: 150px;
            height: 150px;
            margin: 20px auto;
            border-radius: 50%;
            border: 3px dashed rgb(53, 131, 220);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            /* Prevents image overflow */
        }

        .doctor-img {
            max-width: 100%;
            max-height: 100%;
            display: block;
            object-fit: cover;
            border-radius: 100 %;
            /* Prevents extra space below image */
        }

        .doctor-info {
            padding: 10px;
        }

        .specialty {
            color:rgb(0, 0, 0);
            font-weight: bold;
            margin-bottom: 5px;
        }

        .btn-group {
            justify-content: center;
            margin-top: 10px;
        }

        .btn-group button {
            margin: 0 5px;
        }

        .btn-chat {
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 20px;
            display: block;
            /* Makes button a block element for better spacing */
            margin-left: auto;
            margin-right: auto;
        }

        .select-container {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Dokter Spesialis Jiwa</h1>
        <p>Pilih Dokter Spesialis Sesuai Keinginan Anda</p>
        <div class="select-container">
            <select class="form-select">
                <option selected>Jiwa</option>
                <!-- Add more options if needed -->
            </select>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-img-container">
                        <img class="doctor-img" src="images/mariska.jpg" alt="Mariska Diksy Yuniar">
                    </div>
                    <div class="doctor-info">
                        <p class="specialty">Spesialis Jiwa</p>
                        <p>Dr. dr.Mariska Diksy Yuniar, Sp.K.J</p>
                        <div class="btn-group">
                            <button class="btn btn-primary">Janji Temu</button>
                            <button class="btn btn-primary" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
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
            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-img-container">
                        <img class="doctor-img" src="images/nasywa.jpg" alt="Nasywa Afifah Wijaya">
                    </div>
                    <div class="doctor-info">
                        <p class="specialty">Spesialis Jiwa</p>
                        <p>dr.Nasywa Afifah Wijaya, Sp.K.J</p>
                        <div class="btn-group">
                            <button class="btn btn-primary">Janji Temu</button>
                            <button class="btn btn-primary" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
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
            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-img-container">
                        <img class="doctor-img" src="images/teo.jpg" alt="Theodora Marshanda Siregar">
                    </div>
                    <div class="doctor-info">
                        <p class="specialty">Spesialis Jiwa</p>
                        <p>Dr. dr.Theodora Marshanda Siregar, Sp.K.J</p>
                        <div class="btn-group">
                            <button class="btn btn-primary">Janji Temu</button>
                            <button class="btn btn-primary" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
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
            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-img-container">
                        <img class="doctor-img" src="images/lala.jpg" alt="Syarifah Nirmala Ekaputri">
                    </div>
                    <div class="doctor-info">
                        <p class="specialty">Spesialis Jiwa</p>
                        <p>dr.Syarifah Nirmala Eka Putri, Sp.K.J</p>
                        <div class="btn-group">
                            <button class="btn btn-primary">Janji Temu</button>
                            <button class="btn btn-primary" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
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
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
