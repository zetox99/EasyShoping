<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

 Route::get('redirect',[HomeController::class,'redirect']);


 Route::get('/userpage', function () {
    return view('userpage');
})->name('userpage');
Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


//  Routes d'authentification personnalisées
// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('/login', 'Auth\LoginController@login');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register');

// Route des produits
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/redirect', function() {
    return File::get(public_path('admin/index.html'));
});

 
