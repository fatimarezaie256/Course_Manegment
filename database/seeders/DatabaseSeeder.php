<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Teachers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();
        // Subject::factory(10)->create();
        Classes::factory(5)->create();
        Student::factory(70)->create();
        Teachers::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
