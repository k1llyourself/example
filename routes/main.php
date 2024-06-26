<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Posts\CommentController;


Route::view('/', 'home.index')->name('home');

Route::view('about-us', 'about.index')->name('about-us');
Route::view('contacts', 'contacts.index')->name('contacts');


Route::redirect('/home', '/')->name('home.redirect');   

// Route::get('/test', TestController::class)->name('test')->middleware('token:secret');
Route::get('/test', TestController::class)->name('test');

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');

    

});


Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/{post}', [BlogController::class, 'show'])->name('home.show');
Route::post('/{post}/like', [BlogController::class, 'like'])->name('home.like');

Route::resource('posts/{post}/comments', CommentController::class)->only([
    'index', 'show',
]);