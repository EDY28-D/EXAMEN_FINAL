<?php

namespace App\Http\Requests\RecintoController;

use App\Models\Recinto;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class RecintoControllerUpdateRequest extends FormRequest
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
        $RecintoId = $this-> route ('Recinto'); // Suponiendo que 'id' es el identificador de la Recinto
        $Recinto = Recinto::find($RecintoId);
        if (!is_null($Recinto)) { 
            $Recinto -> delete($params);
        }
        return response()->json($Recinto);
    }
}
