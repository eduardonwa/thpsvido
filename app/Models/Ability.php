<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'label'
    ];

    protected $table = 'abilities';

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
}
