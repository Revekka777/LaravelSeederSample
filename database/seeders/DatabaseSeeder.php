<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(2)->create();
        for($i = 1; $i < 3; $i++){
            $post = Post::factory()->create();
            Comment::factory($i)->post($post)->create();
        }

    }
}
