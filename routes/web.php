<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\TroubleshootingController;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/post', [PostController::class, 'index'])->name('posts');
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/post', [PostController::class, 'store'])->name('posts.store');;


Route::get('/recommendation', [RecommendationController::class, 'index'])->name('recommendation');
Route::get('/recommendation/list', [RecommendationController::class, 'list'])->name('recommendation.list');
Route::get('/recommendation/create', [RecommendationController::class, 'create'])->name('recommendation.create');
Route::get('/recommendation/{recommendation}', [RecommendationController::class, 'show'])->name('recommendation.show');
Route::post('/recommendation', [RecommendationController::class, 'store'])->name('recommendation.store');
Route::get('/recommendation/list/{category}/{usage}', [RecommendationController::class, 'list_usage_category'])->name('recommendation.list_usage_category');

Route::get('/troubleshooting', [TroubleshootingController::class, 'index'])->name('troubleshooting');
Route::get('/troubleshooting/create', [TroubleshootingController::class, 'create'])->name('troubleshooting.create');
Route::get('/troubleshooting/{troubleshooting}', [TroubleshootingController::class, 'show'])->name('troubleshooting.show');
Route::post('/troubleshooting', [TroubleshootingController::class, 'store'])->name('troubleshooting.store');
Route::get('/troubleshooting/edit/{troubleshooting}', [TroubleshootingController::class, 'edit'])->name('troubleshooting.edit');
Route::put('/troubleshooting/edit/{troubleshooting}', [TroubleshootingController::class, 'update'])->name('troubleshooting.update');

Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement');
Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create');
Route::post('/announcement', [AnnouncementController::class, 'store'])->name('announcement.store');
