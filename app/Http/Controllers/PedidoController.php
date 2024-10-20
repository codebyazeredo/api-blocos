<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     title="API de Pedidos 3D",
 *     version="1.0",
 *     description="API para gerenciamento de pedidos de blocos 3D personalizados"
 * )
 *
 * @OA\Schema(
 *     schema="Pedido",
 *     type="object",
 *     required={"andares", "cor1", "cor2", "cor3", "desenho1", "desenho2", "desenho3"},
 *     @OA\Property(property="id", type="integer", description="ID do pedido"),
 *     @OA\Property(property="andares", type="integer", description="Número de andares"),
 *     @OA\Property(property="cor1", type="string", description="Primeira cor"),
 *     @OA\Property(property="cor2", type="string", description="Segunda cor"),
 *     @OA\Property(property="cor3", type="string", description="Terceira cor"),
 *     @OA\Property(property="desenho1", type="string", description="Primeiro desenho"),
 *     @OA\Property(property="desenho2", type="string", description="Segundo desenho"),
 *     @OA\Property(property="desenho3", type="string", description="Terceiro desenho"),
 *     @OA\Property(property="created_at", type="string", format="date-time", description="Data de criação"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", description="Data de atualização")
 * )
 */
class PedidoController extends Controller
{
    /**
     * @OA\Get(
     *     path="/pedidos",
     *     summary="Listar todos os pedidos",
     *     @OA\Response(
     *         response=200,
     *         description="Lista de pedidos",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Pedido")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return Pedido::all();
    }

    /**
     * @OA\Post(
     *     path="/pedidos",
     *     summary="Criar um novo pedido",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Pedido")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Pedido criado com sucesso"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $pedido = Pedido::create($request->all());
        return response()->json($pedido, 201);
    }

    /**
     * @OA\Get(
     *     path="/pedidos/{id}",
     *     summary="Obter um pedido pelo ID",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID do pedido",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Detalhes do pedido",
     *         @OA\JsonContent(ref="#/components/schemas/Pedido")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pedido não encontrado"
     *     )
     * )
     */
    public function show($id)
    {
        $pedido = Pedido::find($id);
        if (!$pedido) {
            return response()->json(['message' => 'Pedido não encontrado'], 404);
        }
        return response()->json($pedido);
    }

    /**
     * @OA\Put(
     *     path="/pedidos/{id}",
     *     summary="Atualizar um pedido existente",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID do pedido",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Pedido")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Pedido atualizado com sucesso"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pedido não encontrado"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $pedido = Pedido::find($id);
        if (!$pedido) {
            return response()->json(['message' => 'Pedido não encontrado'], 404);
        }
        $pedido->update($request->all());
        return response()->json($pedido);
    }

    /**
     * @OA\Delete(
     *     path="/pedidos/{id}",
     *     summary="Excluir um pedido",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID do pedido",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Pedido excluído com sucesso"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pedido não encontrado"
     *     )
     * )
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        if (!$pedido) {
            return response()->json(['message' => 'Pedido não encontrado'], 404);
        }
        $pedido->delete();
        return response()->json(null, 204);
    }
}
