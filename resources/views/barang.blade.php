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
        <h2>Tampilkan Data Barang</h2>
        <table border=1>
            <th>Id Barang</th>
            <th>Nama</th>
            <th>Varian</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <tr>
            @foreach($brg as $data)
            <td> {{ $data['id_barang'] }}</td>
            <td> {{ $data['nama'] }}</td>
            <td> {{ $data['varian'] }}</td>
            <td> {{ $data['harga_beli'] }}</td>
            <td> {{ $data['harga_jual'] }}</td>

            </tr>
            @endforeach
        </table>
        </center>
</body>
</html>






