<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = Post::create([
            'title' => 'Post 1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, in.',
            'category' => 'Pendidikan'
        ]);

        $post = Post::create([
            'title' => 'Post 1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, in.',
            'category' => 'Pendidikan'
        ]);



        $post = Post::create([
            'title' => 'Post 1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, in.',
            'category' => 'Pendidikan'
        ]);


        $post = Post::create([
            'title' => 'Post 1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, in.',
            'category' => 'Pendidikan'
        ]);
    }
}
