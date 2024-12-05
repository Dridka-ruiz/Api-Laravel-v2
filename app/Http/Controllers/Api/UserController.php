<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username|max:255',
            'password' => 'required|string|min:8',
            'rol_id' => 'required|exists:rols,id',
        ]);

        $user = User::create([
            'nombre' => $validatedData['nombre'],
            'apellido' => $validatedData['apellido'],
            'username' => $validatedData['username'],
            'password' => bcrypt($validatedData['password']),
            'rol_id' => $validatedData['rol_id'],
        ]);

        return response()->json([
            'message' => 'Usuario creado exitosamente',
            'data' => $user,
        ], 201);
    }
}
