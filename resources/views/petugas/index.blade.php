<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Medical Check Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="height: 100vh">
            <!-- Sidebar -->
            <div class="col-2 bg-primary text-white">
                <div class="p-3">
                    <h4 class="text-center">BANDUNG SEHAT</h4>
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link text-white" href="{{ route('petugas.index') }}">
                        <i class="bi bi-speedometer2 me-2"></i>Dashboard
                    </a>

                    <a class="nav-link text-white" href="{{ route('paket_mcu.index') }}">
                        <i class="bi bi-person-fill me-2"></i>Petugas
                    </a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-10">
                <!-- Navbar -->
                <nav class="navbar navbar-light bg-light shadow-sm mb-3">
                    <div class="container-fluid">
                        <span class="navbar-text">Dashboard</span>
                        <a href="{{ route('layouts.app') }}" class="btn btn-outline-primary">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>

                    </div>
                </nav>

                <!-- Dashboard Cards -->
                <div class="container">
                    <div class="row g-3">
                        <!-- Card: Pemasukan Hari Ini -->
                        <div class="col-md-4 col-lg-3">
                            <div class="card text-center border-primary">
                                <div class="card-body">
                                    <h5 class="card-title">Pemasukan Hari Ini</h5>
                                    <h3 class="text-primary">Rp 0</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Card: Pemasukan Total -->
                        <div class="col-md-4 col-lg-3">
                            <div class="card text-center border-info">
                                <div class="card-body">
                                    <h5 class="card-title">Pemasukan Total</h5>
                                    <h3 class="text-info">Rp 1.050.000</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Card: Dalam Proses -->
                        <div class="col-md-4 col-lg-3">
                            <div class="card text-center border-warning">
                                <div class="card-body">
                                    <h5 class="card-title">Dalam Proses</h5>
                                    <h3 class="text-warning">0</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Card: Selesai -->
                        <div class="col-md-4 col-lg-3">
                            <div class="card text-center border-success">
                                <div class="card-body">
                                    <h5 class="card-title">Selesai</h5>
                                    <h3 class="text-success">3</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Search -->
                        <form class="d-flex w-100" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit" style="width: 100px;">Search</button>
                        </form>

                        <!-- Tabel Pasien -->
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nama Paket</th>
                                <th scope="col">Jenis Pemeriksaan</th>
                                <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>3307894</td>
                                <td>Mark</td>
                                <td>Thorax Basic</td>
                                <td>Thorax</td>
                                <td>Rp 500.000</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>4893076</td>
                                <td>Jacob</td>
                                <td>Paket TBC</td>
                                <td>TBC</td>
                                <td>Rp 400.000</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>8920278</td>
                                <td>William</td>
                                <td>Gula Darah</td>
                                <td>Gula Darah</td>
                                <td>Rp 150.000</td>
                                </tr>
                            </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
