<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
    public function filerenstras(): HasMany
    {
        return $this->hasMany(Filerenstra::class);
    }
}
