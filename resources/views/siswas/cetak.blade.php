<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak PDF</title>
</head>
<body>
    <center>
        <h3>Laporan Data Pendaftaran Siswa Baru</h3>
    </center>

    <table class="table table-striped table-bordered" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>Asal Sekolah</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $siswa as $siswa )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$siswa->nis}}</td>
                    <td>{{$siswa->nama}}</td>
                    <td>{{$siswa->jk}}</td>
                    <td>{{$siswa->tempat_lahir}}</td>
                    <td>{{$siswa->tgl_lahir}}</td>
                    <td>{{$siswa->alamat}}</td>
                    <td>{{$siswa->asal_sekolah}}</td>
                    <td>{{$siswa->kelas}}</td>
                    <td>{{$siswa->jurusan}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>