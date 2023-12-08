<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory, Sluggable;

    protected $table='employees';

    protected $fillable=['division_id', 'name', 'slug', 'nip', 'image', 'level', 'education', 'position', 'pim'];

    protected $hidden=[];

    //SLUG
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    //RELATION
    public function division(): BelongsTo
    {
        return $this->belongsTo(User::class, 'division_id', 'id');
    }
}

