<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    // この通知を受け取ったユーザーを取得
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
