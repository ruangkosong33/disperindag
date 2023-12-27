<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guideinformation extends Model
{
    use HasFactory, Sluggable;

    protected $table='guideinformations';

    protected $fillable=['name', 'slug', 'dip_id', 'address', 'email', 'phone'
                        ,'job', 'applicantdata', 'objective', 'obtain', 'copy', 'method'];

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
    public function dips(): BelongsTo
    {
        return $this->belongsTo(Dip::class);
    }
}
