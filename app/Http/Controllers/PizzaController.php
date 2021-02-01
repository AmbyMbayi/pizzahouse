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
        //$pizzas = Pizza::where('type', 'bazuu')->get();
        $pizzas = Pizza::latest()->get();
         return view('pizzas.index', [
             'pizzas' => $pizzas, 
         ]);
      
    }
    public function show($id){
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza'=> $pizza]);
    }
    public function create(){
        return view('pizzas.create');
    }
    public function store(){

        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = request('price');
        $pizza->toppings = request('toppings');

        //error_log($pizza);
        $pizza->save(); 
        //return request('toppings');
        return redirect('/pizzas')->with('message', 'Thanks for your order');

    }
}
