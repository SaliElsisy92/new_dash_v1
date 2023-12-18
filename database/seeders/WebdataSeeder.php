<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\website_data::factory()->create([
            'phone' => 'auther',
            'landline' => 'http://127.0.0.1:8000/',
            'fax'     =>"fax",
            'email1'  =>"info@MPLT-KSA.com",
            "email2" =>"www.MPLT-KSA.com",
            'facebook'=>"https://www.facebook.com/",
            "linkedin"=>"https://www.linkedin.com/company//",
            "instgram"=>"https://www.instagram.com//",
            "twitter"=>"https://www.x.com/",
            "whatsapp"=>"01094641818",
           ]);
    }
}