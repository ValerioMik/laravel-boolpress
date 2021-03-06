<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Post;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class,50)->create();
    }
}
