<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fileachieve extends Model
{
    use HasFactory, Sluggable;

    protected $table='fileachieves';

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
    public function achieves(): BelongsTo
    {
        return $this->belongsTo(Achieve::class);
    }
}
