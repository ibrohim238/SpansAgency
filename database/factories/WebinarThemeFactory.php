<?php

namespace Database\Factories;

use App\Models\WebinarTheme;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebinarThemeFactory extends Factory
{
    protected $model = WebinarTheme::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
