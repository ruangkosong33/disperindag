<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\History;
use App\Models\Lawppid;
use App\Models\Profileppid;
use App\Models\Regulation;
use App\Models\Structure;
use App\Models\Structureppid;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Vision;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        Vision::create([
            'title' => 'Visi dan Misi',
            'description' => $faker->text,
        ]);
        History::create([
            'title' => 'Sejarah',
            'description' => $faker->text,
        ]);
        Structure::create([
            'title' => 'Struktur Organisasi',
            'description' => $faker->text,
        ]);
        Regulation::create([
            'title' => 'Arah Kebijakan',
            'description' => $faker->text,
        ]);
        Task::create([
            'title' => 'Tupoksi',
            'description' => $faker->text,
        ]);
        Profileppid::create([
            'title' => 'Profil PPID',
            'description' => $faker->text,
        ]);
        // Structureppid::create([
        //     'title' => 'Struktur Organisasi PPID',
        //     'description' => $faker->text,
        // ]);
        // Lawppid::create([
        //     'title' => 'Dasar Hukum PPID',
        //     'description' => $faker->text,
        // ]);
        $bidangs = ['Industri', 'Perdagangan', 'PPKB', 'Koperasi dan UKM', 'UPTD. BPSMB', 'UPTD. Pelkop'];

        for($i=0; $i < count($bidangs); $i++) {
            Division::create([
                'title' => $bidangs[$i],
                'description' => $faker->text,
            ]);
        }
    }
}
