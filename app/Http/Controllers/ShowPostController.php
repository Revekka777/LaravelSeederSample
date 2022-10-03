<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ShowPostController extends Controller
{
    public function __invoke(){
        $data = [];
        foreach(Post::all() as $post){
            $data[$post->id] = [
                'name' => $post->name,
                'avatar' => $post->avatar,
                'desc' => $post->desc,
                'status' => $post->status
            ];
            foreach($post->comments as $comment){
                $data[$post->id]['comments'][$comment->id] = [
                    'name' => $comment->name,
                    'message' => $comment->message,
                    'author' => [
                        'name' => $comment->user->name,
                        'email' => $comment->user->email
                    ]
                ];
            }
        }

        dd($data);
    }
}
