<?php

namespace Database\Seeders;

use App\Models\Category;
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
        Post::truncate();
        User::truncate();
        Category::truncate();

        $user = \App\Models\User::factory()->create();
        $u = \App\Models\User::factory()->create();


        $personal = Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        $work = Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$personal->id,
            'title'=>'Family Post',
            'slug'=>'family-post',
            'excerpt'=>'lorem',
            'body'=>'loremloremlorem'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$work->id,
            'title'=>'Work Post',
            'slug'=>'work-post',
            'excerpt'=>'lorem',
            'body'=>'loremloremlorem'
        ]);

        Post::create([
            'user_id'=>$u->id,
            'category_id'=>$personal->id,
            'title'=>'Personal Post',
            'slug'=>'personal-post',
            'excerpt'=>'lorem',
            'body'=>'loremloremlorem'
        ]);
    }
}
