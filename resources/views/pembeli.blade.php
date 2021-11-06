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
    <h2>Tampilkan Data Pembeli</h2>
     <table border=1>
         <th>Nama Pembeli</th>
         <th>Nama</th>
         <th>Jenis Kelamin</th>
         <th>Alamat</th>
         <th>Kode Pos</th>
         <th>Kota</th>
         <th>Tanggal Lahir</th>

         <tr>
    @foreach($beli as $data)
    <td> {{ $data['nama_pembeli'] }}</td>
    <td> {{ $data['nama'] }}</td>
    <td> {{ $data['jk'] }}</td>
    <td> {{ $data['alamat'] }}</td>
    <td> {{ $data['kode_pos'] }}</td>
    <td> {{ $data['kota'] }}</td>
    <td> {{ $data['tgl_lahir'] }}</td>


    </tr>

    @endforeach
</table>
</center>
</body>
</html>

