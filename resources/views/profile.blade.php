<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <style>
        body {
            background-color: pink; 
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            background-color: #add8e6; 
            padding: 30px;
            border-radius: 15px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .profile-img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background-color: #ddd;
            margin: 0 auto 20px;
        }

        .profile-img img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .profile-info {
            width: 100%;
            margin-bottom: 10px;
            text-align: center;
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-img">
            <img src="{{ asset('assets/img/profile-pic.jpg') }}" alt="Foto Profil">
        </div>
        
        <!-- Informasi Nama -->
        <div class="profile-info">
            <strong>Nama</strong>
            <p><?= $nama ?></p>
        </div>
        
        <!-- Informasi Kelas -->
        <div class="profile-info">
            <strong>Kelas</strong>
            <p><?= $kelas ?></p>
        </div>
        
        <!-- Informasi NPM -->
        <div class="profile-info">
            <strong>NPM</strong>
            <p><?= $npm ?></p>
        </div>
    </div>

</body>
</html>
