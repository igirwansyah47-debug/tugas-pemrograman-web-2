<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'genre',
        'year',
        'director',
        'duration'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}