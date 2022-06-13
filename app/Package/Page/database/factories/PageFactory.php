<?php

namespace App\Package\Page\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Package\Page\app\Model\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->title,
            "content" => $this->faker->text(500),
            "image" => "//127.0.0.1:8000"
        ];
    }
}
