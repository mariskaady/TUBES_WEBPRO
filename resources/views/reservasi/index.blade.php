<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Keranjang Pemesanan</h1>
        <form action="#" method="POST" enctype="multipart/form-data" class="mt-4">
            <div class="mb-3">
                <label for="nim-nip" class="form-label">NIM/NIP</label>
                <input type="text" class="form-control" id="nim-nip" name="nim_nip" placeholder="Masukkan NIM/NIP">
            </div>

            <div class="mb-3">
                <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
                <div class="input-group">
                    <span class="input-group-text">+62</span>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Masukkan nomor WhatsApp">
                </div>
            </div>

            <div class="mb-3">
                <label for="foto-ktm" class="form-label">Upload Foto KTM</label>
                <input type="file" class="form-control" id="foto-ktm" name="foto_ktm">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="tanggal-mulai" class="form-label">Tanggal Mulai Pinjam</label>
                    <input type="date" class="form-control" id="tanggal-mulai" name="tanggal_mulai">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tanggal-selesai" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="tanggal-selesai" name="tanggal_selesai">
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Arduino Uno R3</h5>
                    <div class="d-flex justify-content-between">
                        <span>Rp 300.000 / Minggu</span>
                        <div class="input-group" style="width: 120px;">
                            <button class="btn btn-outline-secondary" type="button">-</button>
                            <input type="text" class="form-control text-center" value="3" readonly>
                            <button class="btn btn-outline-secondary" type="button">+</button>
                        </div>
                    </div>
                    <div class="text-end mt-2">
                        <span class="fw-bold">Total: Rp 900.000</span>
                    </div>
                </div>
            </div>

            <div class="text-end mt-4">
                <button type="button" class="btn btn-danger">Bersihkan Keranjang</button>
                <button type="submit" class="btn btn-primary">Konfirmasi Pemesanan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
