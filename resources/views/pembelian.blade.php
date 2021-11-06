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
    <h2>Tampilkan Data Pembelian</h2>
    <table border=1>
        <th>Nama Barang</th>
        <th>Nama Suplier</th>
        <th>Jumlah</th>
        <th>Tanggal Beli</th>

        <tr>
    @foreach($pembelian as $data)
    <td> {{ $data['nama_barang'] }}</td>
    <td> {{ $data['nama_supplier'] }}</td>
    <td> {{ $data['qty'] }}</td>
    <td> {{ $data['tgl'] }}</td>



    </tr>

    @endforeach
    </table>
</center>
</body>
</html>
