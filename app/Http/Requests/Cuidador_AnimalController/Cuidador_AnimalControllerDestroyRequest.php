<?php

namespace App\Http\Requests\Cuidador_AnimalController;

use App\Models\Animal;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class Cuidador_AnimalControllerDestroyRequest extends FormRequest
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
        $animalId = $this-> route ('Animal'); // Suponiendo que 'id' es el identificador de la animal
        $animal = Animal::find($animalId);
        if (!is_null($animal)) { 
            $animal -> delete($params);
        }
        return response()->json($animal);
    }
}
