<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Zaidun Ngodingun',
            'email' => 'zaidun@test.com',
            'password' => bcrypt('Bismillah')
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        $this->call([
            MajorSeeder::class,
            ClassroomSeeder::class,
            TeacherSeeder::class,
        ]);
    }
}
