<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        // daftar jurusan (silakan sesuaikan)
        $jurusan = [
            'Informatika',
            'Sistem Informasi',
            'Teknik Komputer',
            'Teknik Elektro',
            'Manajemen',
            'Akuntansi',
            'Desain Komunikasi Visual',
        ];

        return [
            'nim' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'nama' => $this->faker->name(),
            'jurusan' => $this->faker->randomElement($jurusan),
            'angkatan' => $this->faker->numberBetween(2018, 2025),
            'email' => $this->faker->unique()->safeEmail(),
            'no_hp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address(),
        ];
    }
}
