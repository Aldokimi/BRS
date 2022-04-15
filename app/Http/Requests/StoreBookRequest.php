<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title'         => 'required|size:255',
            'author'        => 'required|size:255',
            'description'   => 'nullable',
            'released_at'   => 'date|required',
            'cover_image'   => 'nullable|url|size:255',
            'pages'         => 'integer|required',
            'language_code' => 'size:3',
            'isbn'          => 'regex:/^(?=(?:\D*\d){10}(?:(?:\D*\d){3})?$)[\d-]+$/i',
            'in_stock'      => 'integer|required',
        ];
    }
}
