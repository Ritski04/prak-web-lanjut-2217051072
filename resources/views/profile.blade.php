<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-card {
            width: 24rem;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .profile-avatar img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #dee2e6;
        }

        .profile-info p {
            margin: 10px 0;
            font-size: 1rem;
        }

        .profile-info .profile-name,
        .profile-info .profile-class,
        .profile-info .profile-npm {
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="container profile-container">
        <div class="card profile-card">
            <div class="profile-avatar mb-3">
                <img src="{{ $user->foto ? asset($user->foto) : asset('assets/upload/img/default-foto.jpg') }}" alt="Profile">
            </div>
            <div class="profile-info">
                <p class="profile-name">Nama: <br><span>{{ $user->nama }}</span></p>
                <p class="profile-class">NPM: <br><span>{{ $user->npm }}</span></p>
                <p class="profile-npm">Kelas: <br><span>{{ $user->nama_kelas ?? 'Kelas Tidak ditemukan'}}</span></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
