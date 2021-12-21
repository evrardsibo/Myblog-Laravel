<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $famille = ['evr','bel','eva','ken'];
        //                 // utere
        // for($i = 0; $i < count($famille) ; $i++)
        // {
        //     Comment::create([
        //                     // recuper l'index de uteration courant
        //         'label' => $famille[$i]
                
        //     ]);
        // }
        \App\Models\Comment::factory(4)->create();
    }
}
