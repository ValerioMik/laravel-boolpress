<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeedere extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class,10)->create();
    }
}
