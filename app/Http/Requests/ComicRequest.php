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
        'title' => 'required',
        'series' => 'required',
        'price' => 'required',
        'sale_date' => 'required',
        'type' => 'required',
        'artists' => 'required',
        'writers' => 'required',
        'thumb' => 'required',
        'description' => 'required'
      ];
    }

    public function messages()
    {
      return [
        'title.required' => 'Campo obbligatorio',
        'series.required' => 'Campo obbligatorio',
        'price.required' => 'Campo obbligatorio',
        'sale_date.required' => 'Campo obbligatorio',
        'type.required' => 'Campo obbligatorio',
        'artists.required' => 'Campo obbligatorio',
        'writers.required' => 'Campo obbligatorio',
        'thumb.required' => 'Campo obbligatorio',
        'description.required' => 'Campo obbligatorios'
      ];
    }
}
