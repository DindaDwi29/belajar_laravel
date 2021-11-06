<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama_pembeli' => 'Dinda', 'nama' => 'Alya', 'jk' => 'Perempuan', 'alamat' => 'Jln.Nata Endah', 'kode_pos' => 40225, 'kota' => 'Bandung', 'tgl_lahir' => '2005-01-16'],
            ['nama_pembeli' => 'Anggi', 'nama' => 'Astri', 'jk' => 'Perempuan', 'alamat' => 'Pasawahan', 'kode_pos' => 40226, 'kota' => 'Bandung', 'tgl_lahir' => '2004-01-29'],
            ['nama_pembeli' => 'Cindy', 'nama' => 'Anisa', 'jk' => 'Perempuan', 'alamat' => 'Rancamanyar', 'kode_pos' => 40227, 'kota' => 'Bandung', 'tgl_lahir' => '2003-10-29'],
            ['nama_pembeli' => 'Indri', 'nama' => 'Fuji', 'jk' => 'Perempuan', 'alamat' => 'Bojong Citepus', 'kode_pos' => 40228, 'kota' => 'Bandung', 'tgl_lahir' => '2005-05-23'],
            ['nama_pembeli' => 'Lia', 'nama' => 'Indah', 'jk' => 'Perempuan', 'alamat' => 'Cangkuang', 'kode_pos' => 40229, 'kota' => 'Bandung', 'tgl_lahir' => '2004-05-23'],
        ];
        // masukan data ke database
        DB::table('pembelis')->insert($pembeli);

    }
}
