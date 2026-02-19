<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'experiences';
    protected $fillable = [
        'role',
        'organization',
        'description',
        'year'
    ];
}
