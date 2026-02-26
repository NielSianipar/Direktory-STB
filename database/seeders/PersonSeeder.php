<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;
use Faker\Factory as Faker;

class PersonSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID'); // Menggunakan format data Indonesia
        $categories = ['dosen', 'mahasiswa', 'staff'];
        
        $prodis = [
            'Teknik Informatika', 'Sistem Informasi', 'Hukum', 
            'Akuntansi', 'Manajemen', 'Psikologi', 'Arsitektur'
        ];

        foreach ($categories as $category) {
            for ($i = 1; $i <= 10; $i++) {
                
                // Logika ID Number (NIM/NIP palsu)
                $idNum = ($category == 'mahasiswa') 
                         ? $faker->numerify('220#########') 
                         : $faker->numerify('198#######202####');

                Person::create([
                    'name' => $faker->name,
                    'id_number' => $idNum,
                    'category' => $category,
                    'prodi' => ($category == 'staff') ? '-' : $faker->randomElement($prodis),
                    'faculty' => 'Universitas Satya Terra Bhinneka',
                    'image' => null,
                ]);
            }
        }
    }
}