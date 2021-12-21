<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Comment;
use Livewire\Component;

class Filters extends Component
{
    public $comments;
    public $filterIsActif = [];
    public function render()
    {
        $this->filterIsActif = array_filter($this->filterIsActif, function($val){

            return $val;
        });

        // if(empty($this->filterIsActif))
        // {
        //     $articles = Article::all();
        // }else
        // {
        //     $articles = Article::whereIn('comments-id'. array_keys($this->filterIsActif))->get();
        // }
        return view('livewire.filters',[
            'articles' => (empty($this->filterIsActif))
            ? Article::all()
            : Article::whereIn('comments-id'. array_keys($this->filterIsActif))->get()

            // 'comments' => Comment::all()

        ]);
    }
}
