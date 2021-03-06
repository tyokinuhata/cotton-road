<?php

namespace App\Http\Requests\Admin\Products;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 商品系 > 商品編集
 *
 * Class EditRequest
 * @package App\Http\Requests\Admin\Products
 */
class EditRequest extends FormRequest
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
            'name' => [ 'required', 'string', 'min:1', 'max:30', 'regex:/^[a-zA-Z0-9ａ-ｚA-Zぁ-んァ-ヶー一-龠]+$/', ],
            'description' => [ 'required', 'string', 'min:1', 'max:500', 'regex:/^[a-zA-Z0-9ａ-ｚA-Zぁ-んァ-ヶー一-龠]+$/', ],
            'price' => [ 'required', 'digits_between:0,9999999', ],
            'stock_number' => [ 'required', 'digits_between:1,1000', ],
            'safety_stock_number' => [ 'required', 'digits_between:1,1000', ],
            'category' => [ 'required', 'in:1,2,3,4,5,6,7,8,9,10,11', ],
            'id' => [ 'required', 'numeric', 'min:1', ],
            'status' => [ 'required', 'in:1,2,3,4,5,6,7', ],
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'required' => '必須項目です。',
            'string' => '文字列を入力してください。',
            'numeric' => '数値を入力してください。',
            'min' => '1文字以上を入力してください。',
            'name.max' => '30文字以下で入力してください。',
            'description.max' => '500文字以下で入力してください。',
            'price.digits_between' => '0 ~ 9999999の間で入力してください。',
            'stock_number.digits_between' => '1 ~ 1000の間で入力してください。。',
            'safety_stock_number.digits_between' => '1 ~ 1000の間で入力してください。',
            'category.in' => '予期しない商品カテゴリです。',
            'status.in' => '予期しないステータスです。',
        ];
    }
}
