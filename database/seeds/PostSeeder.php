<?php

use Illuminate\Database\Seeder;

use App\Category;
use App\Post;
class PostSeeder extends Seeder
{

    /**
         * Seed the application's database.
         *
         * @return void
            */
    public function run()
    {
        factory(Post::class, 50) -> make() -> each(function($post) {

            $category = Category::inRandomOrder() -> limit(1) -> first();
            
            $post -> category() -> associate($category);

            $post -> save();
        });
    }    
     
}