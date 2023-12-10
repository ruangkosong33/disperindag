<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $table='categorys';

    protected $fillable=['title', 'slug'];

    protected $hidden=[];

    //SLUG
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    //RELATION
    public function post(): HasMany
    {
        return $this->hasMany(Post::class, 'post_id', 'id');
    }

    public function photo(): HasMany
    {
        return $this->hasMany(Photo::class, 'photo_id', 'id');
    }

    public function video(): HasMany
    {
        return $this->hasMany(Video::class, 'video_id', 'id');
    }

    public function commodity(): HasMany
    {
        return $this->hasMany(Commodity::class, 'commodity_id', 'id');
    }
}
