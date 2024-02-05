<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => "required",
            'image_top' => "required",
            'image_middle' => "required",
            'image_bottom' => "required",
            'body' => "required",
            'status' => "required",
            'size_from' => "required",
            'size_to' => "required",
            'floor' => "required",
            'category_id' => "required",
            'build_type_id' => "required",
            'type' => "required",
        ];
    }
}
