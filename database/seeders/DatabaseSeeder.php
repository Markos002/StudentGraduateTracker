<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
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
        $users = [
            [
                'last_name'      => 'Tayone',
                'first_name'     => 'John',
                'student_id'     => '1111111',
                'address'        => 'Cebu City, Philippines',
                'email'          => 'john.tayone@example.com',
                'phone'          => '09123456789',
                'password'       => Hash::make('admin123'),
                'tor_number'     => 'TOR001',
                'course'         => 'BSIT',
                'year_graduate'  => '2025',
                'status'         => 'active',
                'role'           => 'User',
                'job' => [
                    'position'           => 'Software Developer',
                    'occupation'         => 'Full-Stack Developer',
                    'occupation_status'  => 'Employed',
                    'course_alignment'   => 'Aligned',
                    'company_name'       => 'TechNova Solutions',
                    'description'        => 'Develops and maintains web applications for clients.',
                    'start_date'         => '2025-03-01',
                    'end_date'           => null,
                ],
            ],
            [
                'last_name'      => 'Dela Cruz',
                'first_name'     => 'Maria',
                'student_id'     => '0000000',
                'address'        => 'Mandaue City, Philippines',
                'email'          => 'maria.delacruz@example.com',
                'phone'          => '09123456780',
                'password'       => Hash::make('maria123'),
                'tor_number'     => 'TOR002',
                'course'         => 'BSMX',
                'year_graduate'  => '2024',
                'status'         => 'active',
                'role'           => 'Admin',
                'job' => [
                    'position'           => 'Automation Engineer',
                    'occupation'         => 'Mechatronics Specialist',
                    'occupation_status'  => 'Employed',
                    'course_alignment'   => 'Aligned',
                    'company_name'       => 'SmartTech Robotics',
                    'description'        => 'Designs and maintains automated machinery systems.',
                    'start_date'         => '2024-06-15',
                    'end_date'           => null,
                ],
            ],
            [
                'last_name'      => 'Reyes',
                'first_name'     => 'Mark',
                'student_id'     => '3220233',
                'address'        => 'Talisay City, Philippines',
                'email'          => 'mark.reyes@example.com',
                'phone'          => '09123456781',
                'password'       => Hash::make('mark123'),
                'tor_number'     => 'TOR003',
                'course'         => 'BIT-ELEC',
                'year_graduate'  => '2023',
                'status'         => 'inactive',
                'role'           => 'User',
                'job' => [
                    'position'           => 'Technician',
                    'occupation'         => 'Electronics Maintenance Technician',
                    'occupation_status'  => 'Unemployed',
                    'course_alignment'   => 'Aligned',
                    'company_name'       => null,
                    'description'        => 'Previously worked on circuit testing and maintenance.',
                    'start_date'         => '2023-01-10',
                    'end_date'           => '2024-01-10',
                ],
            ],
            [
                'last_name'      => 'Santos',
                'first_name'     => 'Ella',
                'student_id'     => '3220234',
                'address'        => 'Lapu-Lapu City, Philippines',
                'email'          => 'ella.santos@example.com',
                'phone'          => '09123456782',
                'password'       => Hash::make('ella123'),
                'tor_number'     => 'TOR004',
                'course'         => 'BIT-CT',
                'year_graduate'  => '2022',
                'status'         => 'active',
                'role'           => 'User',
                'job' => [
                    'position'           => 'Graphic Designer',
                    'occupation'         => 'Freelance Artist',
                    'occupation_status'  => 'Employed',
                    'course_alignment'   => 'Not Aligned',
                    'company_name'       => 'Self-Employed',
                    'description'        => 'Creates branding and digital artworks for clients.',
                    'start_date'         => '2022-08-01',
                    'end_date'           => null,
                ],
            ],
            [
                'last_name'      => 'Villanueva',
                'first_name'     => 'Carlo',
                'student_id'     => '3220235',
                'address'        => 'Consolacion, Cebu, Philippines',
                'email'          => 'carlo.villanueva@example.com',
                'phone'          => '09123456783',
                'password'       => Hash::make('carlo123'),
                'tor_number'     => 'TOR005',
                'course'         => 'BIT-DT',
                'year_graduate'  => '2021',
                'status'         => 'active',
                'role'           => 'User',
                'job' => [
                    'position'           => 'Architectural Draftsman',
                    'occupation'         => 'CAD Operator',
                    'occupation_status'  => 'Employed',
                    'course_alignment'   => 'Aligned',
                    'company_name'       => 'MetroDesign Builders',
                    'description'        => 'Assists architects in drafting and planning designs.',
                    'start_date'         => '2021-09-20',
                    'end_date'           => null,
                ],
            ],
            [
                'last_name'      => 'Fernandez',
                'first_name'     => 'Bea',
                'student_id'     => '3220236',
                'address'        => 'Danao City, Philippines',
                'email'          => 'bea.fernandez@example.com',
                'phone'          => '09123456784',
                'password'       => Hash::make('bea123'),
                'tor_number'     => 'TOR006',
                'course'         => 'BIT-ELEX',
                'year_graduate'  => '2020',
                'status'         => 'inactive',
                'role'           => 'User',
                'job' => [
                    'position'           => 'Sales Representative',
                    'occupation'         => 'Retail Associate',
                    'occupation_status'  => 'Unemployed',
                    'course_alignment'   => 'Not Aligned',
                    'company_name'       => 'ShopEase Mall',
                    'description'        => 'Handled customer service and product promotions.',
                    'start_date'         => '2020-05-10',
                    'end_date'           => '2023-05-10',
                ],
            ],
        ];

        foreach ($users as $data) {
            $user = User::create([
                'last_name'      => $data['last_name'],
                'first_name'     => $data['first_name'],
                'student_id'     => $data['student_id'],
                'address'        => $data['address'],
                'email'          => $data['email'],
                'phone'          => $data['phone'],
                'password'       => $data['password'],
                'tor_number'     => $data['tor_number'],
                'course'         => $data['course'],
                'year_graduate'  => $data['year_graduate'],
                'status'         => $data['status'],
                'role'           => $data['role'],
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);

            // Create associated job
            Job::create([
                'user_id'            => $user->id,
                'position'           => $data['job']['position'],
                'occupation'         => $data['job']['occupation'],
                'occupation_status'  => $data['job']['occupation_status'],
                'course_alignment'   => $data['job']['course_alignment'],
                'company_name'       => $data['job']['company_name'],
                'description'        => $data['job']['description'],
                'start_date'         => $data['job']['start_date'],
                'end_date'           => $data['job']['end_date'],
                'created_at'         => now(),
                'updated_at'         => now(),
            ]);
        }

    }
}
