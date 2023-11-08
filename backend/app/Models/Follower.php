<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

     // フォロワーを取得
    public function follower()
    {
        return $this->belongsTo(User::class, 'follower_id');
    }

    // フォローされているユーザーを取得
    public function followed()
    {
        return $this->belongsTo(User::class, 'followed_id');
    }
}
