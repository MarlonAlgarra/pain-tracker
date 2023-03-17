<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
            'name' => 'required',
            'type' => 'required',
            'followers' => ['required','integer'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'name' => strip_tags($this->name),
            'type' => strip_tags($this->type),
            'followers' => strip_tags($this->followers)
        ]);
    }
    
}
