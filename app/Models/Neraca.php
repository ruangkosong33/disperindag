<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Neraca extends Model
{
    use HasFactory, Sluggable;

    protected $table='neracas';

    protected $fillable=['title', 'slug', 'description'];

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
    public function fileneracas(): HasMany
    {
        return $this->hasMany(Fileneraca::class);
    }
}
