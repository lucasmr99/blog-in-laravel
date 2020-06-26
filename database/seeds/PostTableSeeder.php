<?php

use App\Post;
use App\Category;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $categories = Category::all();

        foreach ($categories as $key => $c) {
            for($i = 1; $i <= 10; $i++){
                Post::create([
                    'title' => "categoria $i $key",
                    'url_clean' => "categoria-$i-$key",
                    'content' => "Laravel includes a simple method of seeding your database with test data using seed classes. All seed classes are stored in the database/seeds directory. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.",
                    'posted' => 'yes',
                    'category_id' => $c->id
                ]);
            }
        }
    }
}
