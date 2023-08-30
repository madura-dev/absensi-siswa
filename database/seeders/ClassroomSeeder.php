<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            [
                'grade_class' => '1',
                'group_class' => 'A',
                'major_id' => '1',
            ], [
                'grade_class' => '1',
                'group_class' => 'B',
                'major_id' => '1',
            ],
        ];
        foreach($classrooms as $classroom){
            Classroom::create($classroom);
        }
    }
}
