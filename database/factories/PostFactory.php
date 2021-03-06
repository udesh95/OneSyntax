<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'description' => 'First Post',
            // 'description' => 'Second Post',
            // 'description' => 'Third Post',
            // 'description' => 'Forth Post',
            'description' => 'Fifth Post',
    

        ];
    }
}
