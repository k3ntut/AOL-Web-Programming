<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipsAndResources extends Model
{

    protected $table = 'tips_and_resources';

    protected $fillable = [
        'id',
        'title',
        'content',
        'image'
    ];

    /** @use HasFactory<\Database\Factories\TipsAndResourcesFactory> */
    use HasFactory;
}
