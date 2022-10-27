<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::find(1);
        $str = 'string';
        var_dump($str);
        echo $post->content;
        echo "<BR> likes= " . $post->likes;
        echo "<BR>";

        $posts = Post::all();

        foreach ($posts as $post) {
            dump('forich= ' . $post->title);
        }

        $posts_new = Post::where('is_published', 1)->get();
        $posts_new1 = Post::where('is_published', 0)->first();
        dump('posts_new1= ' . $posts_new1->title);


        echo 'posts_new';
        dd($posts_new);
        return 'this is my post';
    }

    public function create()
    {
        $postArr = [
            [
                'title' => 'title of post from vscode',
                'content' => 'some interesting content',
                'image' => 'imaget1.jpg',
                'likes' => '15',
                'is_published' => '1'
            ],
            [
                'title' => 'another title of post from vscode',
                'content' => 'another some interesting content',
                'image' => 'anotherimaget1.jpg',
                'likes' => '16',
                'is_published' => '1'
            ]

        ];
        foreach ($postArr as $item) {
            Post::create($item);
        }

        dd('created');
    }
    public function update()
    {

        $post = Post::find(6);
        $post->update(
            [

                'content' => '2updated',

            ]
        );
        dd('updated');
    }

    public function delete()
    {
        $post = Post::find(5);
        $post->delete();

        dd('delete psge' . $post->id);
    }
    public function undelete()
    {
        $post = Post::withTrashed()->find(5);
        $post->restore();

        dd('undelete psge  ' . $post->id);
    }

    //firstOrCreate - створення запиту без дублікатів за певними умовами
    //updateOrCreate - чи оновлення чи створення за заданими атрибутами

    public function firstOrCreate()
    {
        //$post = Post::find(1);
        $anotherPost = [
            'title' => 'title of post from vscode',
            'content' => 'some interesting content',
            'image' => 'imaget1.jpg',
            'likes' => '15',
            'is_published' => '1'

        ];
        $post = Post::firstOrCreate(
            [
                'title' => '22title of post from vscode',
            ],[

                'title' => '22title of post from vscode',
                'content' => 'some interesting content',
                'image' => 'imaget1.jpg',
                'likes' => '150',
                'is_published' => '1'

            ]

        );


        dd('firstOrCreate records id= '. $post->id);
    }

    //updateOrCreate - чи оновлення чи створення за заданими атрибутами

    public function updateOrCreate()
    {
        //dd('updateOrCreate');
       
        $post = Post::updateOrCreate(
            [
                'title' => 'updateOrCreate 22title of post from vscode',
            ],
            [

                'title' => 'updateOrCreate 22title of post from vscode',
                'content' => 'updateOrCreate some interesting content',
                'image' => 'imaget1.jpg',
                'likes' => '150',
                'is_published' => '1'

            ]

        );


        dd('updateOrCreate records id= ' . $post->id);
    }
}
