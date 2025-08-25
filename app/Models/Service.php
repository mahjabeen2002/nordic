<?php

namespace App\Models;
use App\Models\Quote;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    protected $fillable=[
        'name',
        'slug',
        'short_description',
        'long_description',
        'image',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'status',
        'icon',
        'category_id'

    ];

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
    public function quotes()
    {
        return $this->hasMany(Quote::class, 'service_id');
    }
}
