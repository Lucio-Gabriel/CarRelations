<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index(Request $r){
        $cars = Car::all();
        return $cars;
    }

    public function findOne(Request $r){
        $car = Car::find($r->id);
        return $car;
    }

    public function insert(Request $r){
        $rawData = $r->only([
            'marca',
            'modelo',
            'ano',
            'placa',
            'cor',
            'tipo_veiculo',
        ]);

        $car = Car::create($rawData);

        return $car;
    }
}
