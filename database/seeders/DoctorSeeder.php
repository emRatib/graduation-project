<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::factory()->count(0)->create();
        DB::table('doctors')->insert([
            'name' => 'adel ali',
            'email' => 'uyu365555@gmail.com',
            'password' => Hash::make('adel12345'),
            'image_path' => 'profile.png',
            'status' => 'active',
            'phone' => '01000000000',
            'speciality' => 'surgery',
            'qualification' => 'master',
            'experience' => '5 years',
        ]);
    }
}
