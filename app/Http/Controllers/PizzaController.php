<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //
    public function index(){
        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name', 'dec')->get();
        $pizzas = Pizza::where('type', 'bazuu')->get();
        //$pizzas = Pizza::latest();
         return view('pizza', [
             'pizzas' => $pizzas, 
         ]);
      
    }
    public function show($id){
        return view('details', ['id'=> $id]);
    }
}