<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('schedules')->insert([
            [
                'driver_id' => 1,
                'date' => '2025-05-20',
                'start_time' => '08:00:00',
                'end_time' => '16:00:00',
                'route' => 'Kirana - Balaraja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'driver_id' => 2,
                'date' => '2025-05-20',
                'start_time' => '09:00:00',
                'end_time' => '17:00:00',
                'route' => 'Bitung - Cikupa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'driver_id' => 3,
                'date' => '2025-05-21',
                'start_time' => '07:30:00',
                'end_time' => '15:30:00',
                'route' => 'Kirana - Bitung',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'driver_id' => 4,
                'date' => '2025-05-21',
                'start_time' => '10:00:00',
                'end_time' => '18:00:00',
                'route' => 'Cikupa - Balaraja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
