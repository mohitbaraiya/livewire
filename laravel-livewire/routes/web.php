<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\RegistrationRequest;
use App\Http\Livewire;

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

    return view('examples');
});


Route::post('/contact', function(RegistrationRequest $request){
       
     $request->validated();
     $input = $request->except('_token');

     return view('examples' ,['data'=>$input]); 

});
