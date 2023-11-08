<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

      // このタグが付けられた投稿を取得（多対多）
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tags');
    }
}
