<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|min:2|max:50',
            'class' => 'required|min:2|max:50',
            'order' => 'required|min:2|max:50',
            'family' => 'required|min:2|max:50',
            'diet' => 'required|min:2',
            'habitat' => 'required|min:2'
        ];
    }
}
