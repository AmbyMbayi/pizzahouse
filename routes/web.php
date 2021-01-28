<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', function() {
   $pizza =  [
      ['type'=> 'hawaiian', 'base'=> 'cheesy crust'],
      ['type'=> 'volcano', 'base'=> 'garlic crust'],
      ['type'=> 'veg supreme', 'base'=> 'thin & crispy']

        
    ];

    $age = request('age');
    $last_name = request('last_name');

    
   return view('pizza', ['pizza' => $pizza, 'name'=> request('name'), 'age'=> $age, 'last_name' => $last_name]);

});

Route::get('/pizza/{id}', function($id){
    //use the id variable to questy the db for a record
    return view('details', ['id'=> $id]);
});