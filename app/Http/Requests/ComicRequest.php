<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:255',
            'image' => 'required',
            'price' => 'required|min:2|max:20',
            'series' => 'required|min:4|max:50',
            'sale_date' => 'required|min:4|max:30',
            'type' => 'required|min:4|max:40',
        ];
    }


    public function messages(): array
    {
        return [
            'title.required' => 'devi inserire il titolo',
            'title.min' => 'devi inserire un titolo con almeno :min caratteri',
            'title.max' => 'devi inserire un titolo con massimo :max caratteri',
            'image.required' => 'devi inserire un immagine',
            'price.required' => 'devi inserire il prezzo',
            'price.min' => 'devi inserire un prezzo con almeno :min caratteri',
            'price.max' => 'devi inserire un prezzo con massimo :max caratteri',
            'series.required' => 'devi inserire la serie del fumetto',
            'series.min' => 'devi inserire la serie del fumetto con almeno :min caratteri',
            'series.max' => 'devi inserire la serie del fumetto con massimo :max caratteri',
            'sale_date.required' => 'devi inserire una data di uscita del fumetto',
            'sale_date.min' => 'devi inserire almeno :min caratteri per la data di uscita del fumetto',
            'sale_date.max' => 'devi inserire massimo :max caratteri per la data di uscita del fumetto',
            'type.required' => 'devi inserire il tipo di fumetto',
            'type.min' => 'devi inserire almeno :min caratteri per il tipo di fumetto',
            'type.max' => 'devi inserire massimo :max caratteri per il tipo di fumetto'
        ];
    }

}
