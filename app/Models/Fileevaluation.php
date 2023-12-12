<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fileevaluation extends Model
{
    use HasFactory, Sluggable;

    protected $table='fileevaluations';

    protected $fillable=['title', 'slug', 'file'];

    protected $hidden=[];
}
