<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_title',
        'proskaters',
        'youtube_url',
        'play_now_uri',
    ];

    protected $table = 'banner';
}
