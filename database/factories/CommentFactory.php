<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->jobTitle(),
            'post_id' => null,
            'message' => fake()->text(50),
            'author_id' => User::get()->random()->id
        ];
    }

    public function post(Post $post){
        return $this->state(fn()=>[
            'post_id' => $post->id
        ]);
    }
}
