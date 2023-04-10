<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Car extends Controller
{
       public function index(){
       return view(
       'car.index',
       ['pets' => Pet::all()
       ]);
       }


       public function create(){
       return view('car.create');
       }

       public function store(car $car, Request $request){
         $car->placa = $request->placa;
         $car->telefono = $request->telefono;
         $car->color = $request->color;
         $car->estado = $request->estado;
       }


       public function edit(){
       return view('car.create', compact('car'));
       }

       public function update(){



       }


       public function destroy(){



       }



}
