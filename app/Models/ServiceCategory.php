<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'meta_title',
        'meta_keyword',
        'status',
    ];

    // Define the one-to-many relationship
    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }
}
