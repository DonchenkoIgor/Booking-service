<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreController extends FormRequest
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
            'service_id' => 'required',
            'master_id' => 'required',
            'date' => 'required',
            'time' => 'required|date_format:H:i|after_or_equal:09:00|before_or_equal:18:00',
            'phone' => 'required',
            'name' => 'required',
        ];
    }
}
