<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenreEditRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:15'],
        ];
    }

    /**
     * バリデーションメッセージの修正
     * @param void
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'ジャンル名を入力してください',
            'name.string' => 'ジャンル名は文字列で入力してください',
            'name.max' => 'ジャンル名は15文字以内で入力してください',
        ];
    }
}
