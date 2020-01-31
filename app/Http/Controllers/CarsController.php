<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(){
        $cars = \App\Car::all();

        return view('views', compact('cars'));

    }
    public function show($id){

        $car = \App\Car::find($id);

        return view('/viewCar', compact('car'));
    }
}
