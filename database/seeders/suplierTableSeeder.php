<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class suplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama_supplier' => '001', 'nama' => 'Dinda', 'alamat' => 'Bojong Malaka Indah', 'kode_pos' => 40225, 'kota' => 'Bandung'],
            ['nama_supplier' => '002', 'nama' => 'Anggi', 'alamat' => 'Bojong Citepus', 'kode_pos' => 40245, 'kota' => 'Bandung'],
            ['nama_supplier' => '003', 'nama' => 'Cindy', 'alamat' => 'Rancamanyar', 'kode_pos' => 40275, 'kota' => 'Bandung'],
            ['nama_supplier' => '004', 'nama' => 'Indri', 'alamat' => 'Cangkuang', 'kode_pos' => 40283, 'kota' => 'Bandung'],
            ['nama_supplier' => '005', 'nama' => 'Fuji', 'alamat' => 'Baleendah', 'kode_pos' => 40221, 'kota' => 'Bandung'],

        ];

        DB::table('supliers')->insert($suplier);

    }
}
