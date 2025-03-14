<!-- resources/views/profile_result.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lomba Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-gradient vh-100 d-flex justify-content-center align-items-center" style="background: linear-gradient(135deg, #ffffff, #20c997);">
    <div class="container p-4 shadow-lg rounded bg-white text-center" style="max-width: 500px;">
        <h2 class="text-success fw-bold text-uppercase mb-4">Lomba Information</h2>
        <div class="mb-3 text-start">
            <p class="fw-bold text-success"><i class="bi bi-person-fill"></i> Nama:</p>
            <p class="border p-2 rounded bg-light">{{ $data['nama'] }}</p>
        </div>
        <div class="mb-3 text-start">
            <p class="fw-bold text-success"><i class="bi bi-book-fill"></i> Kelas:</p>
            <p class="border p-2 rounded bg-light">{{ $data['kelas'] }}</p>
        </div>
        <div class="mb-3 text-start">
            <p class="fw-bold text-success"><i class="bi bi-file-earmark-text-fill"></i> Judul Poster:</p>
            <p class="border p-2 rounded bg-light">{{ $data['judul_poster'] }}</p>
        </div>
        <div class="mb-4 text-center">
            <p class="fw-bold text-success"><i class="bi bi-image-fill"></i> Photo:</p>
            <img src="{{ asset('storage/' . $data['photo_path']) }}" class="img-thumbnail shadow" width="200" alt="Lomba Photo">
        </div>
        <a href="/lomba" class="btn btn-success w-100 fw-bold text-uppercase shadow-sm">
            <i class="bi bi-arrow-left-circle-fill"></i> Kembali
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"></script>
</body>
</html>
