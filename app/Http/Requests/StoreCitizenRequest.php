<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCitizenRequest extends FormRequest
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
            'full_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'in:male,female'],
            'phone' => ['required', 'string', 'max:255'],
            'ward_id' => ['required', Rule::exists('wards', 'id')],

        ];
    }

    public function messages()
    {
        return [
            'ward_id.exists' => ['Select a Valid Ward'],
            'ward_id.required' => ['Select a Ward'],
        ];
    }
}
