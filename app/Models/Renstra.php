<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Renstra extends Model
{
    use HasFactory, Sluggable;

    protected $table='renstras';

    protected $fillable=['title', 'slug', 'year'];

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
    public function filerenstra(): HasMany
    {
        return $this->hasMany(Filerenstra::class, 'renstra_id', 'id');
    }
}
