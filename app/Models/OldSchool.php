<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OldSchool extends Model
{
    protected $table = 'oldschool';

    protected $fillable = [
        'game',
        'title',
        'thumbnail',
        'category',
        'video_id',
        'youtube_url'
    ];

    use HasFactory;
}
