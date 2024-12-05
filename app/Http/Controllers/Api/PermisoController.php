<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Permiso; // Asegúrate de importar el modelo
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function index(): JsonResponse
    {
        $permisos = Permiso::all(); // Devuelve todos los permisos
        return response()->json(
            $permisos,
        );
    }
    
    public function store(Request $request): JsonResponse
    {
        $permiso = Permiso::create($request->all());
        return response()->json($permiso, 201);
    }

    
    public function show(string $id): JsonResponse
    {
        $permiso = Permiso::findOrFail($id);
        return response()->json($permiso);
    }


    public function update(Request $request, string $id): JsonResponse
    {
        $permiso = Permiso::findOrFail($id);
        $permiso->update($request->all());
        return response()->json($permiso);
    }

    public function destroy(string $id): JsonResponse
    {
        Permiso::destroy($id);
        return response()->json(['message' => 'Permiso eliminado']);
    }
}
