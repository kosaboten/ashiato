<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePortfolioRequest extends FormRequest
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
            'image' => 'file|image|mimes:jpg,png',
            'affiliation' => 'string|max:100',
            'self_introduction' => 'string|max:1000',
            'work_experience' => 'string|max:1000',
            'region' => 'string|max:100',
            'twitter' => 'string|max:100',
            'facebook' => 'string|max:100',
            'instagram' => 'string|max:100',
            'public_status' => 'required',
        ];
    }
}
