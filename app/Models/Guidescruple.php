<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guidescruple extends Model
{
    use HasFactory, Sluggable;

    protected $table='guidescruples';

    protected $fillable=['name', 'slug', 'dip_id', 'address', 'email', 'phone',
                        'job', 'applicantdata', 'objective', 'obtaion', 'copy', 'method'];

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
    public function dip(): BelongsTo
    {
        return $this->belongsTo(Dip::class);
    }
}
