<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * @var bool|mixed
     */
    public bool $canView;
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'files'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }


    protected function casts(): array
    {
        return [
            'files' => 'array'
        ];
    }
}
