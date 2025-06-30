<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f5f5f5;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 400px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            margin-top: 15px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 20px;
            padding: 10px 16px;
            background-color: #0066cc;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #004999;
        }

        a.back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #0066cc;
        }

        a.back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h2>Tambah Data Mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('mahasiswa.index') }}" class="back-link">← Kembali ke daftar mahasiswa</a>

</body>
</html>
