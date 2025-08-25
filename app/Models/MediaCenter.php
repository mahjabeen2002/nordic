<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaCenter extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'slug',
        'description',
        'video_url',
        'image',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'status',
    ];
}
