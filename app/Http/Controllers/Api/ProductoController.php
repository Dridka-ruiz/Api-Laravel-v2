<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto; // Asegúrate de importar el modelo
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(): JsonResponse
    {
        $productos = Producto::all(); // Devuelve todos los productos
        return response()->json(
            $productos,
        );
    }

    public function store(Request $request): JsonResponse
    {
        $producto = Producto::create($request->all());
        return response()->json($producto, 201);
    }

    public function show(string $id): JsonResponse
    {
        $producto = Producto::findOrFail($id);
        return response()->json($producto);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return response()->json($producto);
    }

    public function destroy(string $id): JsonResponse
    {
        Producto::destroy($id);
        return response()->json(['message' => 'Producto eliminado']);
    }
}
