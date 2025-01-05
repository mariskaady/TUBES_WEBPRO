<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Thorax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h4>Paket Pemeriksaan Thorax</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <img src="{{ asset('images/thorax.jpg') }}" alt="Gambar Pemeriksaan Thorax" class="img-fluid rounded mx-auto d-block">
                    </div>
                    <div class="col-md-6">
                        <p>Pemeriksaan Thorax untuk memeriksa kondisi paru-paru dan jantung.</p>
                        <ul>
                            <li>Rontgen Thorax</li>
                            <li>CT Scan</li>
                            <li>Konsul Dokter Spesialis Paru (Sp.P)</li>
                        </ul>
                        <h5 class="mt-4">Paket Pemeriksaan Thorax</h5>
                        <h4 class="text-danger">Rp 350.000,00</h4>
                        <form action="/pendaftaran_mcu" method="post">
                            @csrf
                            <input type="hidden" name="pasien_id" value="1">
                            <input type="hidden" name="paket_id" value="1">
                        </form>
                        <a href="https://api.whatsapp.com/send?phone=+628112900664&text=%0A%20%20%20%20%20%20%20%20%20Hallo%20Admin%2C%20saya%20memerlukan%20informasi%20untuk%20pemesanan%20paket%20Medical%20Check%20Up.%20Bisa%20dibantu%3F%0A%20%20%20%20%20%20%20%20 " class="btn btn-success mt-3">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
