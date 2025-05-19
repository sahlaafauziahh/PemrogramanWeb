<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DriverSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('drivers')->insert([
            [
                'name' => 'Budi Santoso',
                'email' => 'budi@sejahtera.com',
                'phone' => '081234567890',
                'address' => 'Jl. Merdeka No.1, Jakarta',
                'license_number' => 'SIM12345678',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Agus Salim',
                'email' => 'agus@sejahtera.com',
                'phone' => '081298765432',
                'address' => 'Jl. Raya Cikupa No.2, Tangerang',
                'license_number' => 'SIM87654321',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Slamet Riyadi',
                'email' => 'slamet@sejahtera.com',
                'phone' => '081212345678',
                'address' => 'Jl. Kirana Indah No.3, Tangerang',
                'license_number' => 'SIM34567890',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tono Wirawan',
                'email' => 'tono@sejahtera.com',
                'phone' => '081234123412',
                'address' => 'Jl. Bitung Raya No.4, Tangerang',
                'license_number' => 'SIM65432109',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
