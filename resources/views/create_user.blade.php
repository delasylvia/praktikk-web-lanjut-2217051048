<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            background-color: pink; 
        }
        .form-container {
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
        input[type="text"] {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50; /* Green */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Form Create User</h1>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Masukan nama anda" required>
            
            <label for="npm">NPM</label>
            <input type="text" name="npm" id="npm" placeholder="Masukan NPM anda" required>

            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" id="kelas" placeholder="Masukan kelas anda" required> 
            
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>