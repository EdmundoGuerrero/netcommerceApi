<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use App\Models\Empresa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(3),
            'descripcion' => $this->faker->paragraph,
            'usuario_id' => Usuario::factory(),
            'empresa_id' => Empresa::factory(),
            'completada' => $this->faker->boolean,
            'inicio' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'vencimiento' => $this->faker->optional()->dateTimeBetween('now', '+1 month'),
        ];
    }
}
