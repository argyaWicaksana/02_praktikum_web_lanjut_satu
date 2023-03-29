<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Department::create([
            'department_code' => 'SIB',
            'department_name' => 'Sistem Informasi Bisnis',
            'department_head' => 'Adi Harto'
        ]);

        Department::create([
            'department_code' => 'TI',
            'department_name' => 'Teknik Informatika',
            'department_head' => 'Rudi Harianto'
        ]);

        User::create([
            'name' => 'Argya Wicaksana',
            'email' => 'argya@gmail.com',
            'student_id' => '2141720134',
            'class' => '2E',
            'department_id' => 1,
            'college_exp' => 
                "I dont know what to share about my college experience.
                But one thing i know that i had a lot of experience since i entered
                this college, and its great. I've learned a lot",
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Tesssss',
            'email' => 'tes@gmail.com',
            'student_id' => '1234718271',
            'class' => '2A',
            'department_id' => 2,
            'college_exp' => 
                "I dont know what to share about my college experience.
                But one thing i know that i had a lot of experience since i entered
                this college, and its great. I've learned a lot",
            'password' => bcrypt('password')
        ]);
    }
}
