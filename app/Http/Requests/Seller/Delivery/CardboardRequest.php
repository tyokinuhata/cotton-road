<?php

namespace App\Http\Requests\Seller\Delivery;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 納品系 > ダンボール申請
 *
 * Class CardboardRequest
 * @package App\Http\Requests\Seller\Delivery
 */
class CardboardRequest extends FormRequest
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
            'number' => [ 'required', 'digits_between:1,10', ],
            'cardboard_id' => [ 'required', 'in:1,2,3', ],
        ];
    }


    public function messages()
    {
        return [
            'required' => '必須項目です。',
            'number.digits_between' => '一度に申請できるダンボールは10個までです。',
            'cardboard_id.in' => '予期しないサイズです。',
        ];
    }
}
