<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pendaftaran MCU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1>Edit Pendaftaran MCU</h1>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="pasien_id" class="form-label">Nama Pasien</label>
                <select class="form-select" id="pasien_id" name="pasien_id">
                    <option value="1" selected>Pasien 1</option>
                    <option value="2">Pasien 2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="paket_id" class="form-label">Paket MCU</label>
                <select class="form-select" id="paket_id" name="paket_id">
                    <option value="1" selected>Paket A</option>
                    <option value="2">Paket B</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_pendaftaran" class="form-label">Tanggal Pendaftaran</label>
                <input type="date" class="form-control" name="tanggal_pendaftaran" value="2024-06-14" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>
