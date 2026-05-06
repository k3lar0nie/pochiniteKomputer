<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Override;

class Category extends Model
{
    use Sluggable;
    protected $fillable = ['title'];

    public function posts() {
        return $this->hasMany(Post::class);
    }


    #[Override]
    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true,
            ]
        ];
    }

}

