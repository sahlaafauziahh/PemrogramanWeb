<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan role super_admin dan driver ada
        Role::firstOrCreate(['name' => 'super_admin']);
        Role::firstOrCreate(['name' => 'driver']); 

        // Cek dan buat user admin jika belum ada
        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
            ]
        );

        // Assign role super_admin ke user admin
        if (!$admin->hasRole('super_admin')) {
            $admin->assignRole('super_admin');
        }

        // Buat user driver
        $driver = User::firstOrCreate(
            ['email' => 'driver@angkot.com'],
            [
                'name' => 'Supir',
                'password' => bcrypt('password'),
            ]
        );

        // Assign role driver
        if (!$driver->hasRole('driver')) {
            $driver->assignRole('driver');
        }

        // Panggil seeder tambahan
        $this->call([
            DriverSeeder::class,
            ScheduleSeeder::class,
            AttendanceSeeder::class,
        ]);
    }
}
