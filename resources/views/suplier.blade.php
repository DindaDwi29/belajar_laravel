<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <center>
    <h2>Tampilkan Data Suplier</h2>
    <table border=1>
        <th>Id Suplier</th>
        <th>Nama Suplier</th>
        <th>Alamat</th>
        <th>Kode Pos</th>
        <th>Kota</th>
        <tr>

    @foreach($suplier as $data)
    <td> {{ $data['nama_supplier'] }}</td>
    <td> {{ $data['nama'] }}</td>
    <td> {{ $data['alamat'] }}</td>
    <td> {{ $data['kode_pos'] }}</td>
    <td> {{ $data['kota'] }}</td>



    </tr>

    @endforeach
</table>
</center>
</body>
</html>
