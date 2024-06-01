<!DOCTYPE html>
<html>

<head>
    <title>Data Pasien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        .container {
            width: 100%;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Data Pasien</h2>
        <table>
            <thead>
                <tr>
                    <th>ID User</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataPasien as $pasien)
                    <tr>
                        <td>{{ $pasien->id_user }}</td>
                        <td>{{ $pasien->nama_pasien }}</td>
                        <td>{{ $pasien->jenis_kelamin }}</td>
                        <td>{{ $pasien->tanggal_lahir }}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td>{{ $pasien->no_telp }}</td>
                        <td>{{ $pasien->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>