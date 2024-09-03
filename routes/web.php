<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UpdateContactController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CourseController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/posts',function(){
// return view('post');
// // or you can use also 
// // return "<h1>Post available</h1>";
// });


// Route::view('/blade','bladeTemplate');    //Routing through view method
// Route::view('/users','users');    //Routing through view method
// // Route::view('/users/krishna','krishna');   //ROuting in subroutes
Route::get('/users/krishna', function () {    //Another ways to navigate in subroutes
    return view('pages.krishna');
})->name('krishna');
Route::get('/users/tarun', function () {    //Another ways to navigate in subroutes
    return view('pages.tarun');
})->name('tarun');
Route::get('/users/abhishek', function () {    //Another ways to navigate in subroutes
    return view('pages.abhishek');
})->name('abhishek');


// //Routing with Parameters
// Route::get('/posts/{id}',function(string $val){
// return "<h1>Post Id: ".$val."</h1>";
// });


// //Routing with optional Parameters
// // Route::get('/posts/{id?}',function(string $val=null){
// //     if($val){
// //         return "<h1>Post Id: ".$val."</h1>";

// //     }else{
// //         return "<h1>No post id found</h1>";

// //     }
// // });


// //Routing with optional multiple Parameters
// Route::get('/posts/{id?}/comments/{comment?}',function(string $val=null,string $comment=null){
//     if($val){
//         return "<h1>Post Id: ".$val."</h1><h2>Comment Id:".$comment."</h2>"; 
//     }else{
//         return "<h1>No post id found</h1>";

//     }
// });

// // Routing with constraint
// Route::get('/posts/{id}',function(string $val){
//     if($val){
//         return "<h1>Post Id: ".$val."</h1>"; 
//     }else{
//         return "<h1>No post id found</h1>";

//     }
// })->whereNumber('id');
// // })->whereAlpha('id');
// // })->whereAlphaNumeric('id');
// // })->whereIn('id',['name','age']);
// // })->where('id','[@0-9]+');

// // Routing with multiple parameters with constraints
// Route::get('/posts/{id?}/comments/{comment?}',function(string $val=null,string $comment=null){
//     if($val){
//         return "<h1>Post Id: ".$val."</h1><h2>Comment Id:".$comment."</h2>"; 
//     }else{
//         return "<h1>No post id found.</h1>";
//     }
// })->whereNumber('id')->whereAlpha('comment');

// // Routing with named Route

// Route::get('posts/krishna/helloWolrd',function(){
// return view('krishna');
// })->name('mypost');

// // Redirect
// Route::redirect('/krishna','/posts/krishna/helloWolrd');

// // Group Route
// Route::prefix('page')->group(function(){
//     Route::get('/krishna', function () {    //Another ways to navigate in subroutes
//         return view('krishna');
//     });
//     Route::get('/tarun', function () {    //Another ways to navigate in subroutes
//         return view('krishna');
//     });
//     Route::get('/abhishek', function () {    //Another ways to navigate in subroutes
//         return view('krishna');
//     });

//     // fallback function
//     Route::fallback(function(){
//         return view('pagenotfound');
//     });
// });

// // pass data route to view
// Route::get('/users',function(){
//     $mess='Hello users';
//     return view('pages.users',['mess'=>$mess]);
// });


// Route::get('/{id?}',[PageController::class,'showUser']);
Route::get('/test',TestingController::class);


Route::view('/','register.register');


Route::post('/add',[UserController::class,'addUser'])->name('adduser');

// Route::resource('resource',ResourceController::class);

Route::resource('/students',ResourceController::class);
Route::resource('/library',LibraryController::class);
Route::resource('/contact',ContactController::class);
Route::resource('/professor',ProfessorController::class);
Route::resource('/course',CourseController::class);
Route::get('/updatecontact/{id}',[UpdateContactController::class,'show'])->name('updatecontact');

// only use resource methods
// Route::resource('resource',ResourceController::class)->only([
//     'create','update','show','index'
// ]);
require __DIR__.'/auth.php';
