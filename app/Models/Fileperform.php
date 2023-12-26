<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fileperform extends Model
{
    use HasFactory, Sluggable;

    protected $table='fileperforms';

    protected $fillable=['perform_id', 'title', 'slug', 'file', 'date'];

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
    public function performs(): BelongsTo
    {
        return $this->belongsTo(Perform::class, 'perform_id');
    }
}
