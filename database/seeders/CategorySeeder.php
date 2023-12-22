<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = ['Seputar Indagkop', 'Artikel', 'Info Publik', 'ReactJs'];

        foreach($array as $k => $arr) {
            Category::create([
                'title' => $arr,
            ]);
        }
    }
}
