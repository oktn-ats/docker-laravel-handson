<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Display_change;
use App\Http\Controllers\Provisional_resister;
use App\Http\Controllers\PreUser;
use App\Http\Controllers\Entry_user;
use App\Http\Controllers\true_user_entry;
use App\Http\Controllers\login_result;
use App\Http\Controllers\Display_move;
use App\Http\Controllers\send_article_data;
use App\Http\Controllers\article_post_full_display;
use App\Http\Controllers\post_result;
use App\Http\Controllers\comment_post;

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
    return view('welcome');
});

Route::get('/start',  [Display_change::class, 'index']); // 追加

Route::get('/login_display',  [Display_change::class, 'login_display'])->name('login_transition'); // 追加

Route::get('/tenporary/resister',  [Display_change::class, 'pre_display']); // 追加

Route::get('/new_create_user', [Entry_user::class, 'resister']);
// Route::get('/new_create_user_info', [::class, 'index']);

Route::get('/main_display', [post_result::class, 'main_display'])->name('main_move');

Route::get('/article/new_post', [Display_change::class, 'post_article'])->name('new_post');

Route::post('/resister_user', [Provisional_resister::class, 'index']);

Route::post('/new_create_user/result_information', [true_user_entry::class, 'resister']);

Route::post('/main_display', [Login_result::class, 'DBcheck'])->name('login_result');

// Route::view('/article/new_post', 'article_post')->name('new_post');

Route::post('/send/post_data',[send_article_data::class, 'send_data'])->name('send_data');

Route::post('/full/article_post', [article_post_full_display::class, 'full_display_move'])->name('change_display');

Route::post('/comment_post' , [comment_post::class, 'comment_post'])->name('insert_comment');