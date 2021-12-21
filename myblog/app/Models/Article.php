<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Comment;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'comments-id'
        
    ];

    public function dateFormated()
    {
       return date_format($this->created_at,'d-m-Y');
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
