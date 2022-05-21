<?php

use App\Http\Controllers\SiteController;




 use Illuminate\Support\Facades\Route;


// Route::get('/mainpage',function(){

//     return ' About Us mainPage';
    
//     });


// Route::get('/',function(){
// // return url('/about');
// return route('aboutpage');

// })->name('mainpage');



// Route::get('/about',function(){

// return ' About Us Page';

// });

// Route::get('newws/{id?}',function($id=null){

//     return 'news #'.$id;

// });
// Route::prefix('admin')->group(function(){

//     Route::get('/users',function(){});
//     Route::get('/home',function(){});
//     Route::get('/posts',function(){});
//     Route::get('/prouduct',function(){});
//     Route::get('/comments',function(){});
// });
Route::get('/',[SiteController::class, 'index'])->name('home');   

Route::get('/about',[SiteController::class, 'about'])->name('about');  

Route::get('/team',[SiteController::class, 'team'])->name('team');

Route::get('/searvices',[SiteController::class, 'searvices'])->name('searvices'); 

Route::get('/contact',[SiteController::class, 'contact'])->name('contact');   

Route::get('/user/{name}',[SiteController::class, 'user'])->name('User');   


Route::get('/posts/{user}/comments/{id}',[SiteController::class, 'posts'])->name('posts');  