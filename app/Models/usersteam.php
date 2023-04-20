<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersteam extends Model
{
    use HasFactory;

    protected $fillable = [
        'teamname',
        'admin_name',
        'admin_id',
        'admin_email',
    ];
}
