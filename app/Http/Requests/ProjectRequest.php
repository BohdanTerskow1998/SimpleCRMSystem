<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required",
            "email" => "required",
            "level" => "required",
            "experience" => "required"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Name can not to be empty!",
            "email.required" => "Email can not to be empty!",
            "level.required" => "Level can not to be empty!",
            "experience.required" => "Experience can not to be empty!",
        ];
    }
}
