<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => Post::factory(),
            'message' => $this -> faker -> sentence

             // 'post_id' => 3,
            // 'message' => 'First Comment'

            // 'post_id' => 3,
            // 'message' => 'Second Comment'
           
        ];
    }
}
