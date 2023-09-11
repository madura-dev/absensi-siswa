<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id' => $this->faker->numberBetween(0000001,99999999),
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'birthplace' => $this->faker->city,
            'birthday' => $this->faker->date,
            'address' => $this->faker->address,
            'last_education' => 'SMA',
            'phone_number' => $this->faker->phoneNumber,
            'position' => $this->faker->jobTitle,
            'nominal_salary' => '50000',
            'email' => $this->faker->email,
            'password' => bcrypt('123'),
            'image' => 'gambar.png',
        ];
    }
}
