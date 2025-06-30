<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
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

        a.button {
            display: inline-block;
            padding: 8px 16px;
            margin-bottom: 20px;
            background-color: #0066cc;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        form {
            display: inline;
        }

        button {
            padding: 6px 12px;
            background-color: #cc0000;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #a00000;
        }

        .edit-link {
            padding: 6px 12px;
            background-color: #ffa500;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            margin-right: 5px;
        }

        .edit-link:hover {
            background-color: #cc8400;
        }
    </style>
</head>
<body>

    <h2>Data Mahasiswa</h2>

    <a href="{{ route('mahasiswa.create') }}" class="button">+ Tambah Mahasiswa</a>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $m)
            <tr>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->jurusan }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $m->id) }}" class="edit-link">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" style="text-align: center;">Belum ada data mahasiswa.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
