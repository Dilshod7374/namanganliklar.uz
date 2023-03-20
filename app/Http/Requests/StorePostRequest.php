<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title_uz' => 'required',
            'title_ru' => 'required',
            'short_content_uz' => 'required',
            'short_content_ru' => 'required',
            'content_uz' => 'required',
            'content_ru' => 'required',
        ];
    }
}
