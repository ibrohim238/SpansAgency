<?php

namespace Database\Factories;

use App\Models\Webinar;
use App\Models\WebinarTheme;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebinarFactory extends Factory
{
    protected $model = Webinar::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'webinar_theme_id' => WebinarTheme::factory()
        ];
    }
}
