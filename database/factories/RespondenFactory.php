<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responden>
 */
class RespondenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'age' => fake()->numberBetween(15, 100),
            'education' => fake()->randomElement(['SD', 'SMP', 'SMA', 'SMK', 'D3', 'S1', 'S2', 'S3']),
            'job' => fake()->randomElement(['Pelajar/Mahasiswa', 'Guru', 'PNS', 'TNI', 'Polisi', 'Dosen', 'Pedagang', 'Buruh', 'Lainnya']),
            'village' => fake()->randomElement(['Moodulio', 'Muara Bone', 'Masiaga', 'Taludaa', 'Permata', 'Inogaluma', 'Molamahu', 'Sogitia', 'Cendana Putih', 'Monano', 'Tumbuh Mekar', 'Waluhu', 'Ilohuuwa', 'Dinas Komunikasi']),
            'email' => fake()->unique()->safeEmail(),
            'telp' => fake()->e164PhoneNumber() ,
        ];
    }
}
