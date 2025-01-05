<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            background-color: #e9ecef;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
        }

        .btn-primary {
            background-color: rgb(104, 150, 251);
            border: none;
        }

        .btn-primary:hover {
            background-color: rgb(104, 150, 251);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(104, 150, 251);">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Bandung Sehat</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login Pasien </h2>
                        <form actions="/loginPasien" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                            <hr>
                            <p class="mt-1 text-center" style="color: rgb(104, 150, 251)"><a href="#">Forgot password?</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1B0Q4j46JaaJ39Mbl1Z78yoJw==" crossorigin="anonymous"></script>
</body>

</html>
