<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nomorKelas = [];
        for ($i = 1; $i <= 6; $i++) {
            for ($char = 'a'; $char <= 'i'; $char++) {
                $nomorKelas[] = $i . $char;
            }
        }
        return [
            "namaKelas" => $this->faker->randomElement($nomorKelas)
        ];
    }
}
