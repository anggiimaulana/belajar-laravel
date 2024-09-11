<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-atikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Anggi Maulana',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ullam quisquam optio laboriosam doloremque reprehenderit sunt alias possimus delectus corrupti.'
            ], [
                'id' => 2,
                'slug' => 'judul-atikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Sitii',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ullam quisquam optio laboriosam doloremque reprehenderit sunt alias possimus delectus corrupti.'
            ]
        ];
    }
    public static function find($slug): array
    {
        // callback
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // arrow function
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] ==$slug );

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
