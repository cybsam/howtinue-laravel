<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupUserBlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_name',
        'blogShortDesc',
        'blogMeta',
        'category',
        'description'
    ];
}
