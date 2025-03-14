<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lomba Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-gradient vh-100 d-flex justify-content-center align-items-center" style="background: linear-gradient(135deg, #ffffff, #20c997);">
    <div class="container p-4 shadow-lg rounded bg-white text-center" style="max-width: 500px;">
        <h2 class="text-success fw-bold text-uppercase mb-4">Lomba Form</h2>
        <form action="/submit-lomba" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="mb-3 text-start">
                <label for="nama" class="form-label fw-bold">Nama Peserta:</label>
                <div class="input-group">
                    <span class="input-group-text bg-success text-white"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
                </div>
            </div>
            <div class="mb-3 text-start">
                <label for="kelas" class="form-label fw-bold">Kelas:</label>
                <div class="input-group">
                    <span class="input-group-text bg-success text-white"><i class="bi bi-book-fill"></i></span>
                    <input type="text" class="form-control" name="kelas" placeholder="Masukkan Kelas" required>
                </div>
            </div>
            <div class="mb-3 text-start">
                <label for="judul_poster" class="form-label fw-bold">Judul Poster:</label>
                <div class="input-group">
                    <span class="input-group-text bg-success text-white"><i class="bi bi-file-earmark-text-fill"></i></span>
                    <input type="text" class="form-control" name="judul_poster" placeholder="Masukkan Judul Poster" required>
                </div>
            </div>
            <div class="mb-4 text-start">
                <label for="lomba_photo" class="form-label fw-bold">Profile Photo:</label>
                <input type="file" class="form-control" name="lomba_photo" required>
            </div>
            <button type="submit" class="btn btn-success w-100 fw-bold text-uppercase shadow-sm">
                <i class="bi bi-check-circle-fill"></i> Submit
            </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"></script>
</body>
</html>
