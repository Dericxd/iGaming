<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'title' => 'required|string|max:40|min:3',
            'author_id' => 'required|integer',
            'category_id' => 'required|integer',
            'publication_year' => 'required|min:3|max:4',
            'description' => 'string|max:200'
        ];
    }
}
