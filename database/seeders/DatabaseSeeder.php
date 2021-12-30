<?php

namespace Database\Seeders;

use App\Models\pasien;
use Illuminate\Database\Seeder;

class DataanaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample pasien
        $pasien1 = pasien::create(['dokter' => 123,  'nama_pasien' => 'vadila', 'gender' => 'perempuan', 'tgl_lahir' => 'Bandung, 18 mei 2011', 'alamat' => 'rancamanyar', 'no_hp' => '08977564']);
        $pasien2 = pasien::create(['dokter' => 321, 'nama_pasien' => 'ikevadil', 'gender' => 'lakilaki', 'tgl_lahir' => 'Sukabimi, 09 april 2010 ', 'alamat' => 'rancamanyar', 'no_hp' => '08765432']);
        $pasien3 = pasien::create(['dokter' => 213, 'nama_pasien' => 'lala', 'gender' => 'perempuan', 'tgl_lahir' => 'Subang, 10 November 2016', 'alamat' => 'rancamanyar', 'no_hp' => '089654321']);
    }
}