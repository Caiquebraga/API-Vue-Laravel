<?php


namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::all();

        return response()->json($carros);
    }

    public function show($id)
    {
        $carro = Carro::findOrFail($id);

        return response()->json($carro);
    }

    public function store(Request $request)
    {
        // Validação e criação do carro

        $carro = Carro::create($request->all());

        return response()->json($carro, 201);
    }

    public function update(Request $request, $id)
    {
        // Validação e atualização do carro

        $carro = Carro::findOrFail($id);
        $carro->update($request->all());

        return response()->json($carro);
    }

    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();

        return response()->json(null, 204);
    }
}
