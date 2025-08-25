<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'slug',
        'details',
        'image',
        'status',
    ];


    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
