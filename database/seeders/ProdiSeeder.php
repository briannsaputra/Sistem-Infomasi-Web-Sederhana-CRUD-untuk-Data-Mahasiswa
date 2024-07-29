<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'MUHAMMAD KAHFI', 'nim' => 'E0122541', 'prodi_id' => 1, 'alamat' => 'Kalalimantan Selatan, Banjarmasin', 'usia' => 2, 'tgl_lahir' => '2004/04/25'],
            ['nama' => 'MUHAMMAD NABIL', 'nim' => 'E0122542', 'prodi_id' => 2, 'alamat' => 'Kalalimantan Selatan, Banjarmasin, Simpang Gusti 4', 'usia' => 3, 'tgl_lahir' => '2002/01/11'],
            ['nama' => 'MUHAMMAD ILMI', 'nim' => 'E00122543', 'prodi_id' => 1, 'alamat' => 'Kalalimantan Selatan, Banjarmasin, Simpang Gusti 5', 'usia' => 7, 'tgl_lahir' => '2005/02/12'],
            ['nama' => 'FRANS HELDO', 'nim' => 'E00122544', 'prodi_id' => 2, 'alamat' => 'Kalalimantan Selatan, Banjarmasin, Simpang Gusti 6', 'usia' => 7, 'tgl_lahir' => '2004/03/30'],
        ];

        DB::table('mahasiswas')->insert($data);
    }
}
