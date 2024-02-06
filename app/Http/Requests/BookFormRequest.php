<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookFormRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:30', 'phone:MA'],
            'address' => ['required', 'string'],
            'type' => ['required', 'uuid', 'exists:types,uuid'],
            'city' => ['required', 'uuid', 'exists:cities,uuid'],
            'book_date' => ['required', 'date', 'after_or_equal:today'],
            'book_time' => ['required', 'date_format:H:i']
        ];
    }

    public function messages(): array
    {
        return [
            'book_date.after' => "la date de réservation doit être après aujourd'hui",
            'book_date.after_or_equal' => "la date de réservation doit être aujourd'hui ou  après aujourd'hui",
        ];
    }
}
