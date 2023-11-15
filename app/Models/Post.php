<?php

namespace App\Models;

use App\Blameable;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends BaseModel
{
    const STORAGE_PATH = 'image/';

    use HasFactory, SoftDeletes, Blameable;

    protected $fillable = [
        'category_id', 
        'title', 
        'content',  
        'slug', 
        'image', 
        'price'
    ];

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
