<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            [
                'teacher_id' => '123456789123456789',
                'name' => 'Fauzan',
                'gender' => 'Laki-laki',
                'birthplace' => 'Sumenep',
                'birthday' => '2000-12-21',
                'address' => 'Jln raya pamolokan, sumenep',
                'last_education' => 'S1',
                'phone_number' => '085284395274',
                'position' => 'Guru Honorer',
                'nominal_salary' => '50000',
                'email' => 'fauzan@gmail.com',
                'password' => bcrypt('123'),
                'image' => 'gambar.png',
            ],
        ];
        foreach($classrooms as $classroom){
            Teacher::create($classroom);
        }
    }
}
