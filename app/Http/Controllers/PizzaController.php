<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //
public function __construct(){
    $this->middleware('auth')->except(['create','store']);
}

    public function index(){
        //$pizz = Pizza::orderBy('name', 'desc')->get();
        //$pizz = Pizza::all(); 
        //$pizz = Pizza::where('type','like','H%')->get();
        $pizz = Pizza::latest()->get();
    
        return view('pizzas.index', [
            'pizz' => $pizz            
        ]);
    }

    public function show($id){
        $pizz = Pizza::findOrFail($id);
        return view('pizzas.show',['pizz' => $pizz]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
     $pizza= new Pizza();
     $pizza->name = request('name');
     $pizza->type = request('type');
     $pizza->base = request('base');   
     $pizza->toppings = request('toppings');
     $pizza->save();
        return redirect('/') -> with('mssg','Thank you for buying');
    }

    public function destroy($id){
        $pizz = Pizza::findOrFail($id);
        $pizz->delete();

        return redirect('/') -> with('mssg','done deleting');
    
    }

}
