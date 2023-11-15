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

    public static function getDropdown()
    {
        $subDistrict = self::select('id', 'name');

        return $subDistrict->get()
            ->keyBy('id')
            ->transform(function ($model) {
                return $model->name;
            })->toArray();
    }
}
