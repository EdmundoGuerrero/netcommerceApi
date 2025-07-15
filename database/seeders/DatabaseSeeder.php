<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empresa;
use App\Models\Usuario;
use App\Models\Tarea;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Empresa::factory(5)->create()->each(function ($empresa) {
            // Por cada empresa, crea usuarios
            $usuarios = Usuario::factory(3)->create();

            // Para cada usuario de la empresa, crea tareas ligadas
            $usuarios->each(function ($usuario) use ($empresa) {
                Tarea::factory(5)->create([
                    'usuario_id' => $usuario->id,
                    'empresa_id' => $empresa->id,
                ]);
            });
        });
    }
}
