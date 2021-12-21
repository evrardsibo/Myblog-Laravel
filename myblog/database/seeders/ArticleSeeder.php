<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create();
        // //dd($faker);

        // for($i = 0; $i < 60 ; $i++)
        // {
        //     Article::create([

        //         'title' => $faker->sentence(),
        //         'subtitle' => $faker->sentence(),
        //         'content' => $faker->text($maxNbChars = 600),
        //         'comments-id' => Comment::InRandomOrder()->first()->id
        //     ]);
            
        // }

        Comment::get()->each(function($comment){
            \App\Models\Article::factory(60)->create([
                'comments-id' => $comment->id
            ]);
        });
    }
}
