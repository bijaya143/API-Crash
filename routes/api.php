<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//route created to test or lets say its a practice
// Route::get('/test', function(Request $request)
// {
//     return 'Authenticated';
// });

//route created to perform after getting access token
Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user', function(Request $request){
        return $request->user();
    });
    //all methods from single controller
    Route::apiResource('/authors', AuthorsController::class);
    Route::apiResource('/books', BooksController::class);


    // Route::get('/authors/{author}', [AuthorsController::class, 'show']);
    // Route::get('/authors', [AuthorsController::class, 'index']);
});

//author/{author}
//for 1 specific author

//for this project, books has author
//users create books

//built in route
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
