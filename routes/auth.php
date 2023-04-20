
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::prefix('author')->group(function(){
    Route::get('login', function(){
        return "auth login";
    });
});

