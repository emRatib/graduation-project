<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->delete();
        $Appointments = [
            ['name'=>'saturday'],
            ['name'=>'sunday'],
            ['name'=>'monday'],
            ['name'=>'tuesday'],
            ['name'=>'wednesday'],
            ['name'=>'thursday'],
            ['name'=>'friday'],
        ];
        foreach ($Appointments as $Appointment) {
            Appointment::create($Appointment);
        }
    }
}
