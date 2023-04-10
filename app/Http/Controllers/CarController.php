<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CarController extends Controller
{
       public function index(){
       return view(
       'car.index',
       ['car' => Car::all()
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
