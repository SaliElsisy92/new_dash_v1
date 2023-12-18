<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\seo::factory()->create([
            'auther' => 'auther',
            'url' => 'http://127.0.0.1:8000/',
           ]);
   }


}