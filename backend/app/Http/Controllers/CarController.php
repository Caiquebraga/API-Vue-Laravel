<?php


namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $carros = Car::all();

        return response()->json($carros);
    }

    public function show($id)
    {
        $carro = Car::findOrFail($id);

        return response()->json($carro);
    }

    public function store(Request $request)
    {
        // Validação e criação do carro

        $carro = Car::create($request->all());

        return response()->json($carro, 201);
    }

    public function update(Request $request, $id)
    {
        // Validação e atualização do carro

        $carro = Car::findOrFail($id);
        $carro->update($request->all());

        return response()->json($carro);
    }

    public function destroy($id)
    {
        $carro = Car::findOrFail($id);
        $carro->delete();

        return response()->json(null, 204);
    }
}
