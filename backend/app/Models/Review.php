<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // このレビューをしたユーザーを取得
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // このレビューが関連する投稿を取得
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
