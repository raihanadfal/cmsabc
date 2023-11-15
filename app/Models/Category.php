<?php

namespace App\Models;

use App\Blameable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends BaseModel
{
    use HasFactory, SoftDeletes, Blameable;

    protected $fillable = [
        'code',
        'name' 
    ];

    public function post() {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
