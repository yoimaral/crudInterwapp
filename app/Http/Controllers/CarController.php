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

         $car->save();

         return redirect()->route('car.index');
       }


       public function edit(Car $car){
       return view('car.edit', compact('car'));
       }

       public function update(Request $request, Car $car){

            $car->update([
            'placa' => $request->placa,
            'telefono'=> $request->telefono,
            'color'=> $request->color,
            'estado'=> $request->estado
    ]);

    return redirect()->route('car.index');

       }


       public function destroy(Car $car){

$car->delete();

return redirect()->route('car.index');

       }



}
