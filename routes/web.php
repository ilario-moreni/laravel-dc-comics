<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController as PagesController;
use App\Http\Controllers\ComicsController as ComicsController;
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
Route::resource('home', PagesController::class);


Route::resource('current_series', ComicsController::class);


 /* Route::get('/', [ComicsController::class, 'index'])->name('Comics');
 */
/* Route::get('/', function () {
    $comics = config('comics');
    return view('partials.current_series', compact('comics'));
})->name('Comics'); */

/* Route::get('/single/{id}', function ($id) {
    $comics = config('comics');
    $comic = '';
    foreach($comics as $key => $item){
    
        if($id == $key){
            $comic = $item;
        }
    };
    
    return view('partials.single', compact('comics','comic'));
})->name('single'); */

/* Route::get('/single/{id}', [ComicsController::class, 'showSingle'])->name('Single'); */