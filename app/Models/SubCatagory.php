<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCatagory extends Model
{
    use HasFactory;

    protected $fillable = [
        'supcataid',
        'supcataname',
        'subcatagoryname',
        'subcatagorymetatag',
        'userid',
        'username',
    ];
}
