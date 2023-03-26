<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperCatagory extends Model
{
    use HasFactory;
    
    protected $fillabe = [
        'user_id',
        'supcatagoryname',
        'supcatagory_meta_tag',
    ];
}
