<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'aziz@fic15.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '08123456789',
        ]);

        //seeder profile_clinics manual
        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik Kampus',
            'address' => 'Jl. Pramuka no 156',
            'phone' => '30710371',
            'email' => 'dr.kampus@klinik.com',
            'doctor_name' => 'Dr. Alwa',
            'unique_code' => '631961369',
        ]);

        //call
        $this->call([
            DoctorSeeder::class,
            DoctorScheduleSeeder::class
        ]);
        // $this->call(DoctorSeeder::class);

    }
}
