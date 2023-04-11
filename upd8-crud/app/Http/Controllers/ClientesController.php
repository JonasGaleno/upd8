<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientesController extends Controller
{
    public function index(Request $request)
    {
        $clientes = Http::get(env('API_CLIENTE_URL') . '/clientes')->object();

        $mensagemSucesso = session('mensagem.sucesso');
        $request->session()->forget('message.success');

        return view('clientes.index')
            ->with('clientes', $clientes)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(ClientesFormRequest $request)
    {
        $response = Http::post(env('API_CLIENTE_URL') . '/clientes', $request->input());

        if ($response->status() !== 200) {
            echo 'Deu ruim na requisição';
        }
        
        return redirect()->route('clientes.index')
            ->with('message.success', "Cliente adicionado(a) com sucesso");
    }

    public function edit(int $clienteId)
    {   
        // buscar cliente através da API, buscando dados pelo ID
        $response = Http::get(env('API_CLIENTE_URL') . '/clientes/' . $clienteId);
        
        if ($response->status() !== 200) {
            return 'Deu ruim na requisição';
        }

        $cliente = $response->object();

        return view('clientes.edit')
            ->with('cliente', $cliente);
    }

    public function update(int $clienteId, ClientesFormRequest $request)
    {
        // Montar a requisição de update
        $response = Http::put(env('API_CLIENTE_URL') . '/clientes/' . $clienteId, $request->input());

        if ($response->status() !== 200) {
            return 'Deu ruim na requisição';
        }
        
        return redirect()->route('clientes.index')
            ->with('mensagem.sucesso', "Cliente atualizado(a) com sucesso");
    }

    public function destroy(int $clienteId)
    {
        // Montar a requisição de excluir cliente
        $response = Http::delete(env('API_CLIENTE_URL') . '/clientes/' . $clienteId);

        if ($response->noContent() === false) {
            return 'Deu ruim na requisição';
        }

        return redirect()->route('clientes.index')
            ->with('mensagem.sucesso', "Cliente removido(a) com sucesso");
    }
}
