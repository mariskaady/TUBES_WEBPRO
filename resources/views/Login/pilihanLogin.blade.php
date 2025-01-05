<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Menu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #4facfe, #00f2fe);
            color: #fff;
            font-family: 'Arial', sans-serif;
        }

        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .btn {
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .header-text {
            font-size: 2.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="text-center mb-5">
            <h1 class="header-text">Selamat Datang</h1>
            <p>Pilih login sebagai Petugas atau Admin</p>
        </div>
        <div class="row w-100 justify-content-center">
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <h3 class="mb-3">Login Petugas</h3>
                    <p>Masuk sebagai petugas untuk mengelola sistem.</p>
                    <a href="{{ route('login.petugas') }}" class="btn btn-primary">Login sebagai Petugas</a>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <h3 class="mb-3">Login Pasien</h3>
                    <p>Masuk sebagai pasien untuk melihat layanan.</p>
                    <a href="{{ route('login.pasien') }}" class="btn btn-primary">Login sebagai Pasien</a>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
