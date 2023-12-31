<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Aktivitas Mahasiswa</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="/" class="navbar-brand">
                Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('biodata') }}" class="nav-link">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('berita') }}" class="nav-link">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('profile_lulusan') }}" class="nav-link">Profile Lulusan</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('aktivitas_mahasiswa') }}" class="nav-link">Aktivitas Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <h1 class="text-center">Aktivitas Mahasiswa</h1>
        <hr>

        <!-- Daftar Aktivitas Mahasiswa -->
        <div class="row">
            <!-- Aktivitas 1 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="{{('img/kampus.jpg')}}" class="card-img-top" alt="Gambar Aktivitas 1">
                    <div class="card-body">
                        <h5 class="card-title">Mengikuti organisasi kampus</h5>
                        <p class="card-text">Mengikuti organisasi kampus sangat penting untuk menambah jiwa leadership. Organisasi juga melatih skill berkomunikasi dan berinteraksi dengan yang lain. Selain itu, kita akan mendapat lain dari organisasi, yaitu jaringan.</p>
                        <a href="#" class="btn btn-primary">Detail Aktivitas</a>
                    </div>
                </div>
            </div>

            <!-- Aktivitas 2 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="{{('img/futsal 2.jpg')}}" class="card-img-top" alt="Gambar Aktivitas 2">
                    <div class="card-body">
                        <h5 class="card-title">Aktivitas futsal</h5>
                        <p class="card-text"> futsal dapat mengembangkan bakat dan minat olahraga futsal di lingkungan Politeknik Negeri Bengkalis. Kegiatan dari UKM Futsal antara lain melaksanakan latihan futsal secara rutin serta mengikuti kompetisi-kompetisi futsal dalam skala regional dan nasional.</p>
                        <a href="#" class="btn btn-primary">Detail Aktivitas</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Aktivitas Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>