<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGenreRequest extends FormRequest
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
            'title' => Rule::in(['novel', 'historical', 'humor', 'horror', 'journal', 'mystery', 'math', 'romance', 'memoir']),
            'style' => Rule::in(['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark']),
        ];
    }
}
