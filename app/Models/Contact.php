<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'anonymouse_name',
        'anonymouse_email',
        'anonymouse_website',
        'anonymouse_subject',
        'anonymouse_message'
    ];
}
