<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'max:100'],
            'designation' => ['required', 'max:100'],
            'avatar'    => ['nullable', 'file'],
            'skype'    => ['nullable', 'string'],
            'whatsapp'    => ['nullable', 'string'],
            'email'    => ['nullable', 'string']
        ];
    }
}
