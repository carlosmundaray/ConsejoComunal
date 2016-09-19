<?php

namespace Comunal\Http\Requests;

use Comunal\Http\Requests\Request;

class GrupoFamiliarStoreRquest extends Request
{
     protected $redirect = "censo/create";
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cedula' => 'required|min:6|max:12|regex:/^[0-9]+$/i',
            'name' => 'required|regex:/^[a-z ]+$/i',
            'fecha_nac' => 'required',
            'sexo' => 'required',
            'parentesco' => 'required',
            'grado_instrucion' => 'required',
            'profesion' => 'required',
            'tipo_discapasidad' => 'regex:/^[a-z]+$/i',
            'ingreso_mensual' => 'required|regex:/^[0-9,.]+$/i',
        ];
    }
    

    
    public function response(array $errors){
        if ($this->ajax()){
            return response()->json($errors, 200);
        }
        else
        {
        return redirect($this->redirect)
                ->withErrors($errors, 'form')
                ->withInput();
        }
    }
}
