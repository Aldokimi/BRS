<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBorrowRequest extends FormRequest
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
            'user_id' => 'exists:App\Models\User,id',
            'book_id' => 'exists:App\Models\Book,id',
            'status' => Rule::in(['PENDING', 'ACCEPTED', 'REJECTED', 'RETURNED']), 
            'request_processed_at' => 'date|nullable',
            'request_managed_by'  => 'exists:App\Models\User,id',
            'deadline' => 'date|nullable',
            'returned_at' => 'date|nullable',
            'return_managed_by'  => 'exists:App\Models\User,id',
        ];
    }
}
