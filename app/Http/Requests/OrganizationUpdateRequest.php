<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:255'],
            'kabinet' => ['required', 'string', 'max:255'],
            'periode' => ['required', 'string', 'max:255'],
            'slogan' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
            'sambutan' => ['required', 'string',],
            'pendamping' => ['required', 'string', 'max:255'],
            'visi' => ['required', 'string', 'max:255'],
            'misi' => ['required', 'string'],
        ];
    }
}
