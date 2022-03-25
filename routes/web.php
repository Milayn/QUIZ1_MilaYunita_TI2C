<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',  [PageController::class, 'index']);
Route::get('/about',  [PageController::class, 'about']);
Route::get('/blog',  [PageController::class, 'blog']);
Route::get('/booking',  [PageController::class, 'booking']);
Route::get('/contact',  [PageController::class, 'contact']);
Route::get('/feature',  [PageController::class, 'feature']);
Route::get('/menu',  [PageController::class, 'menu']);
Route::get('/single',  [PageController::class, 'single']);
Route::get('/team',  [PageController::class, 'team']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
