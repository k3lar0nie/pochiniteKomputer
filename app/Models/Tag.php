<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Override;

class Tag extends Model
{
    use Sluggable;

    protected $fillable = ['title'];
    public function posts() {
        return $this->belongsToMany(Post::class);
    }
    #[Override]
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true,
            ]
        ];
    }
}
