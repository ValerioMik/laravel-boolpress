<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'Titolo',
    'sottotitolo',
    'autore',
    'contenuto_post',
    'creato_alle', 
    ];

    public function category(){
        return $this -> belongsTo(Category::class);
    }

    public function tags(){
        return $this ->belongsToMany(Tag::class);
    }

}