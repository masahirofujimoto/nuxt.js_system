<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

     // userリレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // genreリレーション
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    // tagsリレーション（多対多）
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    // reviewsリレーション
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    use HasFactory;
}
