<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'description' => 'required',
            'thumb' => 'url',
            'price' => 'required|numeric|between:5,20',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:100',
            'artists' => 'required',
            'writers' => 'required',
        ];
    }

    public function messages()
    {
        $obbligatorio =  ':attribute è obbligatorio.';
        return [
            'title.required' => $obbligatorio,
            'title.max' => 'hai superato il limite di 100 caratteri!',
            'description.required' => $obbligatorio,
            'price.required' => $obbligatorio,
            'price.numeric' => 'Inserisci un numero',
            'price.between' => 'Il valore deve essere compreso tra 5 e 20',
            'series.required' => $obbligatorio,
            'series.max' => 'hai superato il limite di 50 caratteri!',
            'sale_date.required' => $obbligatorio,
            'sale_date.date' => 'Inserisci una data',
            'type.required' => $obbligatorio,
            'type.max' => 'hai superato il limite di 100 caratteri!',
            'artists.required' => $obbligatorio,
            'writers.required' => $obbligatorio,
            'thumb.url' => 'Inserisci un URL',
        ];
    }
}
