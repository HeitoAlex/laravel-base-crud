<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
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
            //qui inserisco tutte le regole che mi serviranno per validare i campi del form
            'name' => 'required|unique:animals|min:2|max:50',
            'class' => 'required|min:2|max:50',
            'order' => 'required|min:2|max:50',
            'family' => 'required|min:2|max:50',
            'diet' => 'required|min:2',
            'habitat' => 'required|min:2'
        ];
    }

    public function messages()
    {
        //qui inserisco un messaggio personalizzato nel caso di una regola non rispettata
        //es. 'family.min' => 'Inserisci una famiglia di appartenenza che sia lunga almeno 2 caratteri'
        return [];
    }
}
