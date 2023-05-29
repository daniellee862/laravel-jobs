<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ALl listings ------------------------------------
Route::get('/', function () {
    return view('listings', [
        'listings' => Listing::all()
    ]);
});


//Single Listing -------------------------------------

/* route/model binding */
Route::get('/listings/{listing}', function (Listing $listing) {
  
         return view('listing', [
          'listing' => $listing
         ]);

});

/* Standard way */
/* Route::get('/listings/{id}', function ($id) {
    $listing = Listing::find($id);

    if($listing) {
         return view('listing', [
          'listing' => $listing
    ]);
    } else {
        abort('404');
    }
   
}); */




/* practice routes -------------------------------------- */

// Response and headers
Route::get('/hello', function () {
    return response('<h1>Hello World</h1>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('foo', 'bar');
});

//parametric endpoints - route constraints - dubbing helper methods
Route::get('/posts/{id}', function ($id) {
  /*   
  dd($id);
  ddd($id);
 */
    return response('Post ' . $id);
})->where('id', '[0-9]+');


//Query paremeters
/* http://laravel_jobs.test/search?name=Daniel&city=Burnley */

Route::get('/search', function (Request $request) {
  /*   dd($request); */

  return ($request->name . ' ' . $request->city);
});