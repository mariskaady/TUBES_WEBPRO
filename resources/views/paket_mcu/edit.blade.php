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
    <div class="row vh-100">

      <!-- Sidebar -->
      <aside class="col-2 bg-primary text-white d-flex flex-column p-3">
        <h4 class="text-center mb-4">BANDUNG SEHAT</h4>
        <nav class="nav flex-column">
          <a class="nav-link text-white" href="#"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
          <a class="nav-link text-white" href="#"><i class="bi bi-person-fill me-2"></i>Petugas</a>
        </nav>
      </aside>

      <!-- Main Content -->
      <main class="col-10">

        <!-- Navbar -->
        <nav class="navbar navbar-light bg-light shadow-sm mb-3">
          <div class="container-fluid d-flex justify-content-between align-items-center">
            <span class="navbar-text">Edit Paket MCU</span>
            <a href="#" class="btn btn-outline-primary">
              <i class="bi bi-box-arrow-right"></i> Logout
            </a>
          </div>
        </nav>

        <!-- Form Section -->
        <div class="container mt-5">
          <h1 class="mb-4">Edit Paket MCU</h1>

          <!-- Form for editing Paket MCU -->
          <form action="{{ route('paket_mcu.update', $paket->id) }}" method="POST">
            @csrf <!-- Include CSRF Token -->
            @method('PUT') <!-- Use PUT method for update -->

            <!-- Nama Paket -->
            <div class="mb-3">
              <label for="namaPaket" class="form-label">Nama Paket</label>
              <input type="text" class="form-control" id="namaPaket" name="namaPaket" value="{{ $paket->nama_paket }}" required>
            </div>

            <!-- Jenis Pemeriksaan -->
            <div class="mb-3">
              <label for="jenisPemeriksaan" class="form-label">Jenis Pemeriksaan</label>
              <input type="text" class="form-control" id="jenisPemeriksaan" name="jenisPemeriksaan" value="{{ $paket->jenis_pemeriksaan }}" required>
            </div>

            <!-- Harga -->
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="number" class="form-control" id="harga" name="harga" value="{{ $paket->harga }}" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          </form>
        </div>

      </main>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
