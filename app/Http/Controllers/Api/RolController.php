<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index(): JsonResponse
    {
        $rols = Rol::all();
        return response()->json($rols);
    }
    
    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'permissions' => 'required|array', // Validar como un array
        ]);

        $rol = Rol::create($validatedData);
        return response()->json($rol, 201);
    }

    public function show(string $id): JsonResponse
    {
        $rol = Rol::findOrFail($id);
        return response()->json($rol);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $rol = Rol::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'permissions' => 'sometimes|required|array',
        ]);

        $rol->update($validatedData);
        return response()->json($rol);
    }

    public function destroy(string $id): JsonResponse
    {
        Rol::destroy($id);
        return response()->json(['message' => 'Rol eliminado']);
    }
}
