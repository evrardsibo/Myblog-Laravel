<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        // $articles = Article::paginate(6);
        //dd($articles);
        return view('article',[
            
            'articles' => Article::paginate(6),
            'comments' => Comment::all()
         ]);
    }

    public function show(Article $article)
    {
        // $article = Article::where('slug',$slug)->firstOrFail();
        return view('articles',[
           'article' => $article 
        ]);
    }
}
