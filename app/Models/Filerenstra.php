<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filerenstra extends Model
{
    use HasFactory, Sluggable;

    protected $table='filerenstras';

    protected $fillable=['renstra_id', 'title','slug', 'file', 'date'];

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
    public function renstra(): BelongsTo
    {
        return $this->belongsTo(Renstra::class, 'renstra_id', 'id');
    }
}
