<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
use App\Models\Cliente;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

    public function index()
    {
        return Cliente::all();
    }

    public function show(int $clienteId)
    {
        $clienteModel = Cliente::whereId($clienteId)->first();

        if ($clienteModel === null) {
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }

        return $clienteModel;
    }

    public function store(Request $request)
    {
        return response()->json(Cliente::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'dt_nascimento' => $request->dt_nascimento,
            'sexo' => $request->sexo,
            'endereco' => $request->endereco,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
        ]), 201);
    }

    public function update(Cliente $cliente, Request $request)
    {
        $cliente->fill($request->all());
        $cliente->save();

        return $cliente;
    }

    public function destroy(int $clienteId)
    {
        Cliente::destroy($clienteId);

        return response()->noContent();
    }
}
