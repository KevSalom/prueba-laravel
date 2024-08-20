<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newPost = Post::create([
            'title' => 'Test Post',
            'content' => 'This is a test post',
            'isPro' => true,
        ]);

        $newPost->save();
    }
}
