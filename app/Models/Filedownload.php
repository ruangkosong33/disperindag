<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filedownload extends Model
{
    use HasFactory, Sluggable;

    protected $table='file_downloads';

    protected $fillable=['title', 'slug', 'file', 'date'];

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
    public function downloads(): BelongsTo
    {
        return $this->belongsTo(Download::class);
    }
}
