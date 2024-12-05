<?php

namespace App\Models;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;  // Agregar este trait

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens; // Asegúrate de incluir HasApiTokens

    protected $fillable = [
        'nombre',
        'apellido',
        'username',
        'password',
        'rol_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relación con Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    // Verificar permisos del usuario
    public function hasPermission(string $permission): bool
    {
        $permissions = $this->rol->permissions ?? [];
        return in_array($permission, $permissions);
    }
}
