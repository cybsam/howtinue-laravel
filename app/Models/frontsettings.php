<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class frontsettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'websitename',
        'websitefaviconicon',
        'websitemainlogo',
        'websitefooterlogo',
        'userid',
        'username'
    ];
}
