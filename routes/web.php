<?php

use App\Http\Controllers\admin\KeywordController;
use App\Http\Controllers\admin\QuestionController;
use App\Http\Controllers\admin\SitemapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('front');
Route::get('/post/{id}/{slug}', [HomeController::class, 'single'])->name('front.single');
// Route::get('/', function () {
//     return view('auth/login');
// })->middleware('guest');
// Route::get('/', function () {
//     return view('auth/login');
// })->middleware('guest');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth'],], function () {
    Route::get('/', [KeywordController::class, 'index'])->name('home');
});

Route::group(['prefix' => 'admin/keywords', 'middleware' => ['auth'],], function () {
    Route::get('/', [KeywordController::class, 'index'])->name('keywords');
    Route::get('getKeywordsData', [KeywordController::class, 'getData'])->name('getKeywordsData');
    Route::get('create', [KeywordController::class, 'create'])->name('keywords.create');
    Route::post('store', [KeywordController::class, 'store'])->name('keywords.store');
    Route::get('/{id}/edit', [KeywordController::class, 'edit'])->name('keywords.edit');
    Route::put('/update/{id}', [KeywordController::class, 'update'])->name('keywords.update');
    Route::get('/delete/{id}', [KeywordController::class, 'delete'])->name('keywords.delete');
    Route::get('/changeStatus/{id}', [KeywordController::class, 'changeStatus'])->name('keywords.changeStatus');
});

Route::group(['prefix' => 'admin/questions', 'middleware' => ['auth'],], function () {
    Route::get('/', [QuestionController::class, 'index'])->name('questions');
    Route::get('getQuestionData', [QuestionController::class, 'getData'])->name('getQuestionData');
    Route::get('/searchQuestion', [QuestionController::class, 'searchQuestion'])->name('questions.search');
    Route::get('/searchAnswer', [QuestionController::class, 'searchAnswer'])->name('answer.search');
});

Route::group(['prefix' => 'admin/sitemap', 'middleware' => ['auth'],], function () {
    Route::get('/', [SitemapController::class, 'index'])->name('questions.search');
    Route::get('/getSitemapData', [SitemapController::class, 'getData'])->name('getSitemapData');
    Route::get('/changeStatus/{id}', [SitemapController::class, 'changeStatus'])->name('sitemap.changeStatus');
    Route::get('/view/{id}', [SitemapController::class, 'view'])->name('sitemap.read');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/test', [HomeController::class, 'test'])->name('test');
