<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(4);
        return [
            'author_id' => $this->faker->numberBetween(1, 3),
            'category_id' =>$this->faker->numberBetween(1, 3),
            'slug' => urlencode($title),
            'title' => $title,
            'exerpt' => $this->faker->sentence(15),
            'body' => "<p>{$this->faker->paragraph()}</p>"
        ];
    }
}
