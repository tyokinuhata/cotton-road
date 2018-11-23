<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class OperateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => [ 'required', 'string', 'min:1', 'max:13', 'regex:/^[a-zA-Z0-9_]+$/', ],
        ];
    }

    public function messages()
    {
        return [
            'user_id.min' => '1文字以上を入力してください。',
            'user_id.max' => '13文字以下で入力してください。',
            'user_id.regex' => 'ユーザIDは英数字でに有力してください。',
        ];
    }
}
