<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMemberRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'designation' => ['required', 'string', 'max:100'],
            'avatar'    => ['nullable', 'file'],
            'skype'    => ['nullable', 'string'],
            'whatsapp'    => ['nullable', 'string'],
            'email'    => ['nullable', 'string']
        ];
    }
}
