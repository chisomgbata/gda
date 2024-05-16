<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'media_url',
        'images',
        'additional_files',
    ];

    protected $casts = [
        'images' => 'array',
        'additional_files' => 'array',
    ];
}
