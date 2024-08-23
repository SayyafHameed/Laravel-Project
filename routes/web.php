<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
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

require __DIR__.'/auth.php';


// Route::get('/', function () {
//     $data = [1, 2, 3];
//     return view('home', compact('data'));
// });

// Route::resource('posts', PostController::class);

// Route::get('/', function () {
//     return '<form action="data" method="post">
//             ' . csrf_field() . '
//             <input type="submit" value="GO" /></form>';
// });

// Route::get('/', function () {
//     return '<form action="myData" method="post">
//             <input type="hidden" name="_method" value="put" />
//             <input type="hidden" name="_token" value="' . csrf_token() . '"  />
//             <input type="submit" value="GO" /></form>';
// });

// Route::post('data', function () {
//     return '<h2>Hello in page DATA</h2>';
// });

Route::put('myData', function () {
    return '<h2>Hello in page MY_DATA</h2>';
});

Route::get('/ahmed', [TestController::class, 'Ahmed']);

Route::view('/sayyaf', 'welcome');

Route::redirect('/ali', 'https://www.google.com');

// Route::controller(TestController::class)->name('test.')->group(function(){
//     Route::get('/home', 'Ali') -> name('home');
//     Route::get('/print/{name?}', 'printName') -> name('printMyName');
// });

Route::get('/hello', [UserController::class, 'index']);

Route::controller(ThemeController::class)->name('theme.', 'auth.')->group(function(){
    Route::get('/home', 'home')->name('home');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/cart', 'cart')->name('cart');
    Route::post('/contact/store', 'store')->name('contact.store');  
});
