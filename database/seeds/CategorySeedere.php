<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategorySeedere extends Seeder
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
