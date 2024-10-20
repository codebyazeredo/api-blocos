<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        return Pedidos::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'andares' => 'required|integer|min:1',
            'cor1' => 'required|string',
            'cor2' => 'required|string',
            'cor3' => 'required|string',
            'desenho1' => 'required|string',
            'desenho2' => 'required|string',
            'desenho3' => 'required|string',
        ]);
        $pedido = Pedidos::created($validated);
        return response()->json(['message' => 'Pedido criado com sucesso!', 'id' => $pedido->id], 201);
    }

    public function show($id)
    {
        $pedido = Pedidos::findOrFail($id);
        return $pedido;
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'andares' => 'required|integer|min:1',
            'cor1' => 'required|string',
            'cor2' => 'required|string',
            'cor3' => 'required|string',
            'desenho1' => 'required|string',
            'desenho2' => 'required|string',
            'desenho3' => 'required|string',
        ]);

        $pedido = Pedidos::findOrFail($id);
        $pedido->update($validated);
        return response()->json(['message' => 'Pedido atualizado com sucesso!', 'id' => $pedido->id], 201);
    }

    public function destroy($id)
    {
        Pedidos::findOrFail($id)->delete();
        return response()->json(['message' => 'Pedido Excluído com sucesso!'], 201);
    }
}
