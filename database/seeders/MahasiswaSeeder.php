<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 100; $i++) {
            DB::table('mahasiswas')->insert([
                'nama' => $faker->name,
                'nim' => "E0203220". $i,
                'alamat' => $faker->address,
                'usia' => $faker->numberBetween(17,50),
                'tgl_lahir' => $faker->date('Y-m-d'),
                'prodi_id' =>$faker->numberBetween(1,2)
            ]);
        }
    }
}
