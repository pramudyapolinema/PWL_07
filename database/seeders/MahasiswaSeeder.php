<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'Nim' => '1941720054',
            'Nama' => 'Pramudya Wibowo',
            'Kelas' => 'TI-2D',
            'Jurusan' => 'Teknologi Informasi',
            'No_Handphone' => '082244101304',
            'email' => '1941720054@student.polinema.ac.id',
            'tanggal_lahir' => '2001-01-24',
        ]);

        $faker = Faker::create('id_ID');

        for($i = 0; $i < 100; $i++){
            $nim = $faker->unique()->numberBetween(1941720000, 1941720500);
            DB::table('mahasiswas')->insert([
                'Nim'               => $nim,
                'Nama'              => $faker->name,
                'Jurusan'           => $faker->randomElement(['Teknologi Informasi', 'Teknik Elektronika']),
                'Kelas'             => $faker->randomElement(['MI', 'TI']) .'-' . $faker->randomDigit . strtoupper($faker->randomLetter),
                'No_Handphone'      => $faker->e164PhoneNumber,
                'email'             => $nim . '@student.polinema.ac.id',
                'tanggal_lahir'     => $faker->date('Y-m-d', '2003-07-30'),
            ]);
        }
    }
}
