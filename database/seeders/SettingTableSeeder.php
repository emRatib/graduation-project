<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();
        DB::table('settings')->insert([
            'website_name' => 'Diabetes Management System',
            'website_logo' => 'logo.png',
            'website_favicon' => 'favicon.png',
            'website_email' => 'uyu365656@gmail.com',
            'website_phone' => '01000000000',
            'website_address' => 'Cairo',
            'website_facebook' => 'https://www.facebook.com/',
            'website_twitter' => 'https://twitter.com/',
            'website_instagram' => 'https://www.instagram.com/',
            'website_youtube' => 'https://www.youtube.com/',
            'website_whatsapp' => 'https://web.whatsapp.com/',
        ]);
    }
}
