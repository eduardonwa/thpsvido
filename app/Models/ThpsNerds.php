<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThpsNerds extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail',
        'category',
        'video_id'
    ];

    protected $table = 'thpsnerds';
}
