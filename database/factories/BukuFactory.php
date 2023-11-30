<?php

namespace Database\Factories;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Definisikan status default model.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->word(),
            'album' => $this->faker->word(),
            'author' => $this->faker->sentence(),
            'tahun' => $this->faker->year(),
        ];
    }
}