<?php

declare(strict_types=1);

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:70'],
            'email' => ['required', 'string', 'max:255', 'email:rfc,dns,spoof,filter', 'unique:users,email,' . $this->user->id],
        ];
    }
}
