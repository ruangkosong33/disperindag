<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fileiku extends Model
{
    use HasFactory, Sluggable;

    protected $table='fileikus';

    protected $fillable=['iku_id', 'title', 'slug', 'file'];

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
    public function ikus(): BelongsTo
    {
        return $this->belongsTo(Iku::class, 'iku_id');
    }
}
