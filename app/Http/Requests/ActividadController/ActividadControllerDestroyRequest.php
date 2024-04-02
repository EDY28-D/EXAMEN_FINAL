<?php

namespace App\Http\Requests\ActividadController;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use App\Models\Actividad;
class ActividadControllerDestroyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @author PlantUmlGen
     * @return array
     */
    public function rules(): array
    {
        return [
            '' => '',
        ];
    }

    /**
     * messages
     * @author PlantUmlGen
     * @return array
     */
    public function messages(): array
    {
        return [
            'required' => 'The :attribute is required.',
            'max' => 'The :attribute is very long.',
            'unique' => 'The :attribute has already been taken.',
            'exists' => 'Could not find :attribute',
        ];
    }

    /**
     * response
     * @author PlantUmlGen
     * @return JsonResponse
     */
    public function response(): JsonResponse
    {
        $params = $this->request->all();
        $actividadId = $this-> route ('Actividad'); // Suponiendo que 'id' es el identificador de la actividad
        $actividad = Actividad::find($actividadId);
        if (!is_null($actividad)) { 
            $actividad -> delete($params);
        }
        return response()->json($actividad);
    }
}
