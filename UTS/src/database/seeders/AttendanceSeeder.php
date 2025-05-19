<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendance;
use Illuminate\Support\Carbon;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attendance::insert([
            [
                'driver_id' => 1,
                'date' => Carbon::today()->toDateString(),
                'check_in' => '08:00:00',
                'check_out' => '16:00:00',
                'status' => 'present',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'driver_id' => 2,
                'date' => Carbon::today()->toDateString(),
                'check_in' => '09:00:00',
                'check_out' => '17:00:00',
                'status' => 'present',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'driver_id' => 3,
                'date' => Carbon::today()->toDateString(),
                'check_in' => null,
                'check_out' => null,
                'status' => 'sick',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'driver_id' => 4,
                'date' => Carbon::today()->toDateString(),
                'check_in' => '10:00:00',
                'check_out' => '18:00:00',
                'status' => 'present',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
