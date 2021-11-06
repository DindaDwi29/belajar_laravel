<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_pembelian' => 'Ujang Mermed', 'nama_barang' => 'Makaroni Kering', 'nama_supplier' => 'Kiki', 'qty' => '400', 'tgl' => '2000-10-12'],
            ['nama_pembelian' => 'Ujang Mermed', 'nama_barang' => 'Bihun Kering', 'nama_supplier' => 'Putri', 'qty' => '100', 'tgl' => '2000-10-12'],
            ['nama_pembelian' => 'Ujang Mermed', 'nama_barang' => 'Usus Goreng', 'nama_supplier' => 'Selvi', 'qty' => '500', 'tgl' => '2000-10-12'],
            ['nama_pembelian' => 'Ujang Mermed', 'nama_barang' => 'Mie Lidi', 'nama_supplier' => 'Indra', 'qty' => '300', 'tgl' => '2000-10-12'],
            ['nama_pembelian' => 'Ujang Mermed', 'nama_barang' => 'Cimol', 'nama_supplier' => 'Suci', 'qty' => '200', 'tgl' => '2000-10-12'],
        ];
        DB::table('pembelians')->insert($pembelian);

    }
}
