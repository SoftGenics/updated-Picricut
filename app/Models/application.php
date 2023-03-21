<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id', 'offer_free', 'privacy', 'canteach', 'subject', 'segment', 'frees', 'killvideo', 'experienceofforeign'
    ];
}
