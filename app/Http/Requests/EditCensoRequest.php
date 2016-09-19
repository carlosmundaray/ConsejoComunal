<?php

namespace Comunal\Http\Requests;

use Comunal\Http\Requests\Request;

class EditCensoRequest extends Request
{
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
            'nacionalidad' => 'required|max:1',
            'cedula' => 'required|unique:censos|max:9',
        ];
    }
}
