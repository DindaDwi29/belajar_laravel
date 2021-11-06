<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class barangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['id_barang' => '001', 'nama' => 'Alya', 'varian' => 'Pedas', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['id_barang' => '002', 'nama' => 'Astri', 'varian' => 'Asin', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['id_barang' => '003', 'nama' => 'Anisa', 'varian' => 'Keju', 'harga_beli' => 5000, 'harga_jual' => 5000],
            ['id_barang' => '004', 'nama' => 'Fuji', 'varian' => 'Barbeque', 'harga_beli' => 4000, 'harga_jual' => 5000],
            ['id_barang' => '005', 'nama' => 'Indah', 'varian' => 'Jagung Bakar', 'harga_beli' => 5000, 'harga_jual' => 5000],
        ];
// masukan data ke database
        DB::table('barangs')->insert($barang);

    }
}
