<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_id'        => 2, // if auto-increment, you can omit this
            'last_name'      => 'Doe',
            'first_name'     => 'John',
            'student_id'     => '3221839',
            'address'        => 'Cebu City, Philippines',
            'email'          => 'admin@example.com',
            'phone'          => '09123456789',
            'password'       => Hash::make('admin123'), // secure hash
            'tor_number'     => 'TOR-2025-001',
            'course'         => 'BS Information Technology',
            'year_graduate'  => '2025',
            'status'         => 'active',
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);
    }
}
