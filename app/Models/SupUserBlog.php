<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;


class SupUserBlog extends Model implements Viewable
{
    use HasFactory;
    use Commentable;
    use InteractsWithViews;



    protected $fillable = [
        'blog_name',
        'slug',
        'blogShortDesc',
        'blog_meta_title',
        'blog_meta_description',
        'blog_meta_keyword',
        'category',
        'sub_category_name',
        'blogImage',
        'super_category',
        'description',
        'userid',
        'username',

    ];



    function relationshiptocategory(){
        return $this->hasOne('App\Models\SubCatagory','id', 'id');
    }
}
