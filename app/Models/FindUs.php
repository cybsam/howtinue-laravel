<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FindUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'facebook',
        'twitter',
        'whatsapp',
        'linkedin',
        'reddit',
        'telegram'
    ];
}
