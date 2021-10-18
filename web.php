<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathsController;
use App\Http\Controllers\MovieController;

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
//double colon so it's a static function
//declaring and handling at the same time


//Testing routes messing about ------------------------------------------
// Route::get('/literallyanything', function () {
//     return view('welcome');
// });

// Route::get('/literallyanything', function () {
//     return 'Hello there!';
// ----------------------------------------------------------------------

//these are both the same route
// Route::get('/add', [MathsController::class , 'add']);
// Route::get('/add', ['MathsController' , 'add']); //dunno how to make this one work yet tho
//when you make a route you need to also put in a use statement at the top from that controller. The use state can be found in that controller's file.

// Route::get('/sub/{x}/{y}', [MathsController::class , 'sub'])
//     ->where('x','[0-9]+')
//     ->where('y','[0-9]+');
//these are root parameters
//make sure those parameters are labelled/named the same as in the function in controller.


// Route::get('/form', function () {
//     return view('form');
// });

// Route::any('/calculate', [MathsController::class , 'add'])
//     ->name('maths.add');

// Route::get('/sub', [MathsController::class , 'sub'])
//     ->name('maths.sub');

//-------------------------------------------------------------------------------

// Route::any('/calculator', [MathsController::class , 'calculator']);

// Route::any('/calculator', [MathsController::class , 'calculator'])
//     ->name('maths.calculator');

// Route::any('/yeahboi', [MathsController::class,'passdata'])
//     ->name('data');

// Route::any('/solo', [MathsController::class,'passdata'])
//     ->name('maths.calculator');

    //---------------------------------------------------

// Route::get('/movies', [MovieController::class, 'index'])
//     ->name('movies.show');

// Route::get('/movies', [MovieController::class, 'show'])
//     ->name('movies.show');

    //---------------------------------------------------

// Route::get('/tvs', [MovieController::class, 'index'])
//     ->name('tvs.show');

// Route::get('/tvs', [MovieController::class, 'show'])
//     ->name('tvs.show');

Route::any('/yeahboi', [MovieController::class,'getData'])
    ->name('data');