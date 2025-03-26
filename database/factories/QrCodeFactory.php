<?php

namespace Database\Factories;

use App\Models\QrCode;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QrCode>
 */
class QrCodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = QrCode::class;

    public function definition(): array
    {
        $code = Str::random(10);

        return [
            'code' => $code,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
        ];
    }
}
