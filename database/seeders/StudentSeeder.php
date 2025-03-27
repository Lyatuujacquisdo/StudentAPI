<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
            ['name' => 'Jacquisdo Lyatuu', 'program' => 'Software Engineering'],
            ['name' => 'Furahini Kisivani', 'program' => 'Software Engineering'],
            ['name' => 'Witness Nshobairwe', 'program' => 'Software Engineering'],
            ['name' => 'Kabipe Yohanna', 'program' => 'Software Engineering'],
            ['name' => 'Oscar Kimenyi', 'program' => 'Software Engineering'],
            ['name' => 'Pius Semufali', 'program' => 'Software Engineering'],
            ['name' => 'Melkizedek Magota', 'program' => 'Software Engineering'],
            ['name' => 'Amar Masoud', 'program' => 'Software Engineering'],
            ['name' => 'Felister Kapaya', 'program' => 'Software Engineering'],
            ['name' => 'Irene Mrosso', 'program' => 'Software Engineering'],
        ]);
    }
}
