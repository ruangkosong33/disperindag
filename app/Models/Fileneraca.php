<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fileneraca extends Model
{
    use HasFactory, Sluggable;

    protected $table='fileneracas';

    protected $fillable=['title', 'slug', 'file'];

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
    public function neracas(): BelongsTo
    {
        return $this->belongsTo(Neracas::class);
    }
}
