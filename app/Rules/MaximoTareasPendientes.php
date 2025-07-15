<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Tarea;

class MaximoTareasPendientes implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pendientes = Tarea::where('usuario_id', $value)
                           ->where('completada', 0)
                           ->count();

        if ($pendientes >= 5) {
            $fail('El usuario ya tiene 5 tareas pendientes.');
        }
    }
}
