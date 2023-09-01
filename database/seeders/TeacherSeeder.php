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
            [
                'teacher_id' => '98765675434567654389',
                'name' => 'Dila Fajriyani',
                'gender' => 'Perempuan',
                'birthplace' => 'Sumenep',
                'birthday' => '2003-06-12',
                'address' => 'Jln Lenteng, sumenep',
                'last_education' => 'SMA',
                'phone_number' => '085345456876',
                'position' => 'Guru Honorer',
                'nominal_salary' => '50000',
                'email' => 'dila@gmail.com',
                'password' => bcrypt('123'),
                'image' => 'gambar.png',
            ],
            [
                'teacher_id' => '123456789123456789',
                'name' => 'mila',
                'gender' => 'Perempuan',
                'birthplace' => 'Sampang',
                'birthday' => '2003-06-12',
                'address' => 'Jln Lenteng, sumenep',
                'last_education' => 'SMA',
                'phone_number' => '085567398146',
                'position' => 'Guru Honorer',
                'nominal_salary' => '50000',
                'email' => 'mila@gmail.com',
                'password' => bcrypt('123'),
                'image' => 'gambar.png',
            ],
            [
                'teacher_id' => '98765675434567654389',
                'name' => 'Edo',
                'gender' => 'Perempuan',
                'birthplace' => 'Bangkalan',
                'birthday' => '2003-06-12',
                'address' => 'Jln Lenteng, sumenep',
                'last_education' => 'SMA',
                'phone_number' => '085763287462',
                'position' => 'Guru Honorer',
                'nominal_salary' => '50000',
                'email' => 'edo@gmail.com',
                'password' => bcrypt('123'),
                'image' => 'gambar.png',
            ],
            [
                'teacher_id' => '123456789123456789',
                'name' => 'Dika',
                'gender' => 'Perempuan',
                'birthplace' => 'Sumenep',
                'birthday' => '1999-04-26',
                'address' => 'Jln Lenteng, sumenep',
                'last_education' => 'SMA',
                'phone_number' => '085081258482',
                'position' => 'Guru Honorer',
                'nominal_salary' => '50000',
                'email' => 'dika@gmail.com',
                'password' => bcrypt('123'),
                'image' => 'gambar.png',
            ],
            [
                'teacher_id' => '98765675434567654389',
                'name' => 'Yana',
                'gender' => 'Perempuan',
                'birthplace' => 'Bangkalan',
                'birthday' => '2001-08-02',
                'address' => 'Jln Lenteng, sumenep',
                'last_education' => 'SMA',
                'phone_number' => '085658521678',
                'position' => 'Guru Honorer',
                'nominal_salary' => '50000',
                'email' => 'yana@gmail.com',
                'password' => bcrypt('123'),
                'image' => 'gambar.png',
            ],
        ];
        foreach($classrooms as $classroom){
            Teacher::create($classroom);
        }
    }
}
