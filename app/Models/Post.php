<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $table='posts';

    protected $fillable=['title', 'slug', 'category_id', 'description', 'date', 'image', 'status', 'user_id'];

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

    public function categorys(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
