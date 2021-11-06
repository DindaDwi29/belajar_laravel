<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pesanan' => 'Makanan', 'nama_pelanggan' => 'Dinda', 'nama_barang' => 'Makaroni Kering', 'qty' => '1', 'tgl_pesan' => '2021-10-29'],
            ['nama_pesanan' => 'Makanan', 'nama_pelanggan' => 'Anggi', 'nama_barang' => 'Bihun Kering', 'qty' => '2', 'tgl_pesan' => '2021-06-15'],
            ['nama_pesanan' => 'Makanan', 'nama_pelanggan' => 'Cindy', 'nama_barang' => 'Usus Goreng', 'qty' => '2', 'tgl_pesan' => '2021-11-01'],
            ['nama_pesanan' => 'Makanan', 'nama_pelanggan' => 'Indri', 'nama_barang' => 'Mie Lidi', 'qty' => '3', 'tgl_pesan' => '2021-10-02'],
            ['nama_pesanan' => 'Makanan', 'nama_pelanggan' => 'Lia', 'nama_barang' => 'Cimol', 'qty' => '5', 'tgl_pesan' => '2021-12-20'],
        ];
// masukan data ke database
        DB::table('pesanans')->insert($pesanan);

    }
}
