<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bolang Gunung || Rekap Pegawai</title>
    <style>
        * {
            box-sizing: border-box;
            font-size: 18px;
            font-family: Times New Roman;
        }

        body {
            background-color: #f8f8f8;
        }

        .margin {
            background-color: #fff;
            width: 80%;
            margin: 20px auto;
            box-shadow: 0 1px 1px 0 #ccc;
            padding: 40px 60px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td:first-child {
            width: 30%;
        }

        td {
            padding: 10px;
        }

        h4 {
            font-size: 25px;
        }

        h1 {
            font-size: 30px;
        }
    </style>
</head>

<body>
    <div class="margin">
        <table align="center" style="border-collapse:collapse;">
            <td style="border-bottom:2px solid #000; text-align: center;padding: 2px; width: 50px; width:50px">
                <img src="{{ public_path("styleAdmin/production/images/logo-bolang-dark.jpg") }}" alt="" style="width: 150px; height: 150px;">
            </td>
            <td style="border-bottom:2px solid #000; text-align: center;padding: 2px; width: 200px; width:800px">
                <h2 align="center">LAPORAN PEGAWAI BOLANG GUNUNG
                    <br>
                    Jl. Soekarno Hatta
                    <br>
                    Telepon: 08811890773, Email : bolanggunungexample@gmail.com
                </h2>
            </td>
        </table>
        <hr>
        <br>

        <table>
            <tr>
                <td scope="col" width="60px">Ditujukan Kepada</td>
                <td scope="row" width="50px">:</td>
                <td scope="row">Pimpinan Bolang Gunung</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td scope="col">:</td>
                <td>Jl. Soekarno Hatta</td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>:</td>
                <td>08811890773</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>bolanggunungexample@gmail.com</td>
            </tr>
        </table>
        <h4>Data Pegawai Bolang Gunung</h4>
        <table border="1">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th width="100px">Kode Pegawai</th>
                    <th width="120px">Nama Pegawai</th>
                    <th width="120px">Alamat</th>
                    <th width="120px">Tanggal Lahir</th>
                    <th width="120px">Umur</th>
                    <th width="120px">Jabatan</th>
                    {{-- <th width="120px">Foto KTP</th>
                        <th width="120px">Kartu Pelajar</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->kode_pegawai }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->tanggal_lahir)->format('d M Y') }}</td>
                        <td>{{ $p->umur }}</td>
                        <td>{{ $p->jabatan }}</td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <p align="right">Malang, {{ $tanggal }}<br>{{ Auth()->user()->jabatan }} Bolang
            Gunung<br><br><br><br>{{ Auth()->user()->nama }}</p>
    </div>
</body>

</html>
