
<?php
// PHP code goes here

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
//all listings
/*
Route::get('/', function () {
    
   
});
*/
//single listings CONVRTING TO ROUTE MODEL BINDINGS
//here instead of '/listing/{id}' we passed {listing}
//and instead of passing $id into the function
// we passed the Listing (model) and then a variable of $listing
//and this $listing variable should match the {listing} variable

//show all listing
Route::get('/', [ListingController::class, 'index']);

//show create form
Route::get('/listings/create',[ListingController::class, 'create'])->middleware('auth');

//store listing data
Route::post('/listings',[ListingController::class, 'store']);

//show edit form
//this is route model binding {listings}
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit']);


//update listing
//edit submit to update
Route::put('/listings/{listing}', [ListingController::class,'update']);


//Delete listing

Route::delete('/listings/{listing}', [ListingController::class,'destroy'])->middleware('auth');


//show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//show register/create form

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// we know it's a post request to /users so let's handle that in this below route;
Route::post('/users', [UserController::class, 'store']);

//log out

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//show login form 
Route::get('/login',[UserController::class, 'login'])->name('login');

//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);




/*

Route::get('/listings/{listing}', function (Listing $listing) {
    //returns view for a single listing
    //and then we wanna pass in an array that has a listing value.
    
    
});*/

/* CONVERTING SINGLE LISTING TO ROUTE MODEL BINDINGS
//single listings
Route::get('/listings/{id}', function ($id) {
    //returns view for a single listing
    //and then we wanna pass in an array that has a listing value.
    $listing = Listing::find($id);
    if($listing){
        return view('listing',
        [

            'listing'=> Listing::find($id)
        ]
        );
    }else{
        abort('404');
    }
    
});
*/
Route::get('/hello', function () {
    return response('<h1> welcome </h1>', 200)-> header('Content-Type', 'text/plain')
    -> header('foo', 'bar')
    ;//we can add headers to this response
    //giving text/plain gives out plaintext

});

Route::get('/posts/{id}', function ($id) {
    return response('Post'.$id);
    

});

Route::get('/posts/{id}', function ($id) {
    dd($id);//die dump  
    ddd($id);//die dump debugger
    return response('Post'.$id);
    

})-> where('id','[0-9]+');//adding a constraint so all numbers are only accepted



Route::get('/search', function (Request $request) {
    //return dd($request);
   
    //return dd($request->name .' '. $request->city);
    return $request->name .' '. $request->city;
    

});

//common resource routes:
//index - show all listing
//show- show single listing
//create -show form to create a new listing
//store - store new listing
//edit- show form to edit listing
//update - update listing
//destroy - delete listing
?>




