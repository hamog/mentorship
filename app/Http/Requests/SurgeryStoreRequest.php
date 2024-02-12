<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurgeryStoreRequest extends FormRequest
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
        $this->dd();
        return [
            'patient_name' => 'required|string|max:100',
            'patient_national_code' => 'required|digits:10',
            'document_number' => 'required|numeric',
            'description' => 'nullable|string|max:1000',
            'surgeried_at' => 'required|date_format:Y-m-d',
            'released_at' => 'required|date_format:Y-m-d',

            'operations' => 'required|array',
            'operations.*' => 'required|integer|exists:operations,id',

            'doctors_*' => 'required|integer|exists:doctors,id',
        ];
    }
}
