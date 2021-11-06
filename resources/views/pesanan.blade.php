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
    <h2>Tampilkan Data Pesanan</h2>
     <table border=1>
         <th>Nama Pesanan</th>
         <th>Nama Pelanggan</th>
         <th>Nama Barang</th>
         <th>Jumlah</th>
         <th>Tanggal Pesan</th>
         <tr>

    @foreach($pesanan as $data)
    <td> {{ $data['nama_pesanan'] }}</td>
    <td> {{ $data['nama_pelanggan'] }}</td>
    <td> {{ $data['nama_barang'] }}</td>
    <td> {{ $data['qty'] }}</td>
    <td> {{ $data['tgl_pesan'] }}</td>



    </tr>

    @endforeach
</table>
</center>
</body>
</html>

