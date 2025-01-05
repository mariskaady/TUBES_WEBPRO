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
        <div class="row" style="height: 100vh;">
            <!-- Sidebar -->
            <div class="col-2 bg-primary text-white">
                <div class="p-3 text-center">
                    <h4>BANDUNG SEHAT</h4>
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link text-white" href="#"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
                    <a class="nav-link text-white" href="#"><i class="bi bi-person-fill me-2"></i>Petugas</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-10">
                <!-- Navbar -->
                <nav class="navbar navbar-light bg-light shadow-sm mb-3">
                    <div class="container-fluid">
                        <span class="navbar-text">Petugas</span>
                        <a href="#" class="btn btn-outline-primary">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </div>
                </nav>

                <div class="container mt-5">
                    <h1>Daftar Paket MCU</h1>
                    <a href="/paket-mcu/create" class="btn btn-primary mb-3">Tambah Paket</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Paket</th>
                                <th>Jenis Pemeriksaan</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr th:each="paket, stat : ${pakets}">
                                <td th:text="${stat.index + 1}"></td>
                                <td th:text="${paket.namaPaket}"></td>
                                <td th:text="${paket.jenisPemeriksaan}"></td>
                                <td th:text="${paket.harga}"></td>
                                <td>
                                    <a th:href="@{/paket-mcu/edit/{id}(id=${paket.id})}" class="btn btn-warning btn-sm">Edit</a>
                                    <form th:action="@{/paket-mcu/delete/{id}(id=${paket.id})}" method="post" style="display:inline;" onsubmit="return confirmDelete(this);">
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- JavaScript Confirmation -->
    <script>
        function confirmDelete(form) {
            return confirm('Apakah Anda yakin ingin menghapus paket ini?');
        }
    </script>
</body>

</html>