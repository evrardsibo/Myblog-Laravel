<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $filleble = [

        'label',
        'icon'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
