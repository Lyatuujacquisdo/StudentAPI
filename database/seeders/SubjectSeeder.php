<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::insert([
            ['name' => 'Introduction to Programming', 'year' => 1],
            ['name' => 'Database Management Systems', 'year' => 1],
            ['name' => 'Object-Oriented Programming', 'year' => 2],
            ['name' => 'Software Engineering Principles', 'year' => 2],
            ['name' => 'Web Development', 'year' => 3],
            ['name' => 'Mobile Application Development', 'year' => 3],
            ['name' => 'Cloud Computing', 'year' => 4],
            ['name' => 'AI & Machine Learning', 'year' => 4],
        ]);
    }
}
