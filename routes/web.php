<?php
use App\User;
use Illuminate\Support\Facades\Input;
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
});
Route::get('/profile', function (){
  $SEARCH = Input::get('profile');
  $user = DB::select(DB::raw("SELECT * FROM users WHERE
    id = '$SEARCH'"));
  if (count($user))
    return view('profile')->withDetails($user)->withQuery ( $SEARCH );
  else return view ('profile')->withMessage('No Details found. Try to search again !');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/search', function () {
    $SEARCH = Input::get('SEARCH');
    if (empty($SEARCH)){
      $user = DB::select(DB::raw("SELECT * FROM users"));
    }else {
      $user = DB::select(DB::raw("SELECT * FROM users WHERE
      name LIKE '$SEARCH' or
      lastname LIKE '$SEARCH' or
      city LIKE '$SEARCH'
      or description LIKE '$SEARCH'"));
    }
    if (count($user))
      return view('search')->withDetails($user)->withQuery ( $SEARCH );
    else return view ('search')->withMessage('No Details found. Try to search again !');
});
// Logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('/', 'ListController@show');
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
