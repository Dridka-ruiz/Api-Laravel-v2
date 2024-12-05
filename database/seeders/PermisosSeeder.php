<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permiso;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos = [
            // Extrusores
            [
                'group' => 'extrusores',
                'permisos' => 'extrusores.mostrar',
                'text_font' => 'Mostrar todos las Etiquetas',
            ],
            [
                'group' => 'extrusores',
                'permisos' => 'extrusores.crear',
                'text_font' => 'Crear las Etiquetas',
            ],
            [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.editar',
                'text_font'=> 'Editar las Etiquetas',
              ],
              [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.pendiente',
                'text_font'=> 'Pendientes las Etiquetas',
              ],
              [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.extruir',
                'text_font'=> 'Extruir las Etiquetas',
              ],
              [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.eliminar',
                'text_font'=> 'Eliminar las Etiquetas',
              ],
              [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.exportacion',
                'text_font'=> 'Importar excel',
              ],
              [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.mover',
                'text_font'=> 'Mover Etiquetas',
              ],
              [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.no_mover',
                'text_font'=> 'No mover Etiquetas',
              ],
              [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.no_mostrar_opciones',
                'text_font'=> 'No mostrar opciones',
              ],
              [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.mostrar_opciones',
                'text_font'=> 'Mostrar opciones',
              ],
              [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.no_mostrar_extruidos',
                'text_font'=> 'Mostrar productos Extruidos',
              ],
              [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.mostrar_extruidos',
                'text_font'=> 'Mostrar productos',
              ],
        
              //Productos
              [
                'group'=> 'Productos',
                'permisos'=> 'productos.mostrar',
                'text_font'=> 'Mostrar todos las Productos',
              ],
              [
                'group'=> 'Productos',
                'permisos'=> 'productos.crear',
                'text_font'=> 'Crear las Productos',
              ],
              [
                'group'=> 'Productos',
                'permisos'=> 'productos.editar',
                'text_font'=> 'Editar las Productos',
              ],
              [
                'group'=> 'Productos',
                'permisos'=> 'productos.eliminar',
                'text_font'=> 'Eliminar las Productos',
              ],
              [
                'group'=> 'Productos',
                'permisos'=> 'productos.exportacion',
                'text_font'=> 'Importar excel',
              ],
        
              //User
              [
                'group'=> 'usuarios',
                'permisos'=> 'usuarios.mostrar',
                'text_font'=> 'Mostrar todos los Usuarios',
              ],
              [
                'group'=> 'extrusores',
                'permisos'=> 'extrusores.mostrarOpciones',
                'text_font'=> 'Mover las Etiquetas',
              ],
        
              //molinos
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.mostrar',
                'text_font'=> 'Mostrar todos las Etiquetas',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.crear',
                'text_font'=> 'Crear las Etiquetas',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.editar',
                'text_font'=> 'Editar las Etiquetas',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.pendiente',
                'text_font'=> 'Pendientes las Etiquetas',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.extruir',
                'text_font'=> 'Extruir las Etiquetas',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.eliminar',
                'text_font'=> 'Eliminar las Etiquetas',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.exportacion',
                'text_font'=> 'Importar excel',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.mover',
                'text_font'=> 'Mover Etiquetas',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.no_mover',
                'text_font'=> 'No mover Etiquetas',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.no_mostrar_opciones',
                'text_font'=> 'No mostrar opciones',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.mostrar_opciones',
                'text_font'=> 'Mostrar opciones',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.no_mostrar_molidos',
                'text_font'=> 'Mostrar productos molidos',
              ],
              [
                'group'=> 'molinos',
                'permisos'=> 'molinos.mostrar_molidos',
                'text_font'=> 'Mostrar productos',
              ],
        ];

        foreach ($permisos as $permiso) {
            Permiso::updateOrCreate(
                ['permisos' => $permiso['permisos']], // Busca por el campo 'permisos'
                $permiso // Inserta o actualiza los datos
            );
        }

        $this->command->info('Permisos insertados correctamente.');
    }
}
