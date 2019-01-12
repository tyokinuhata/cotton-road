<?php

namespace App\Http\Requests\Admin\Products;

use Illuminate\Foundation\Http\FormRequest;

/**
 * ユーザ系 > ユーザ情報編集
 *
 * Class EditRequest
 * @package App\Http\Requests\Admin\User
 */
class DeleteRequest extends FormRequest
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
            'product_id' => [ 'required', 'numeric', ],
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'product_id.required' => 'IDは必須です。',
            'product_id.numeric' => 'IDは数値で指定してください。',
        ];
    }
}
