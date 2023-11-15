<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id', 'slug', 'excerpt', 'body'
    ];

    // Jika diperlukan relasi dengan model lain, Anda dapat mendefinisikannya di sini
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
