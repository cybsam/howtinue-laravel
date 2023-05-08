<?php

namespace App\Http\Controllers\FrontEnd\search;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\SuperCatagory;
use App\Models\SubCatagory;
use App\Models\SupUserBlog;
use Laravelista\Comments\Commentable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
// use ProtoneMedia\LaravelCrossEloquentSearch\Search;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class searchController extends Controller
{
    public function searchIndex(Request $request){
        $searchQueryValue = $request->__search;

        // $searchQueryValue = $_GET('__search');
        // dd($searchQueryValue);
        // die();


        $searchQuery = SupUserBlog::where('blog_name','LIKE','%'.$searchQueryValue.'%')
                            ->orWhere('blog_short_desc','LIKE','%'.$searchQueryValue.'%')
                            ->orWhere('sub_category_name','LIKE','%'.$searchQueryValue.'%')
                            // ->paginate(1);
                            ->latest()
                            ->get();

        $commntsGetFromDatabase = DB::table('comments')->where('comment','LIKE','%'.$searchQueryValue.'%')->latest()->get();

        // dd($commntsGetFromDatabase);
        // die();
        // $paginate = $searchQuery->paginate(2);

        // $searchResults = (new Search())
        //         ->registerModel(SupUserBlog::class, 'blog_name')
        //         ->registerModel(SubCatagory::class, 'subcatagoryname')
        //         ->search($searchQueryValue);




        return view('FrontEnd.search.search',[
            'searchQuery'=>$searchQuery,
            'searchQueryValue'=>$searchQueryValue,
            'commntsGetFromDatabase'=>$commntsGetFromDatabase
            // 'paginate'=>$paginate
        ]);
    }
}
