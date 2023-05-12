<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use \Conner\Tagging\Taggable;

class SupUserBlog extends Model implements Viewable
{
    use HasFactory;
    use Commentable;
    use InteractsWithViews;

    protected $fillable = [
        'blog_name',
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

    // public function getSearchResult(): SearchResult
    //  {
    //     $url = route('blog.details', $this->slug);

    //      return new \Spatie\Searchable\SearchResult(
    //         $this,
    //         $this->title,
    //         $url
    //      );
    //  }

    function relationshiptocategory(){
        return $this->hasOne('App\Models\SubCatagory','id', 'id');
    }
}
