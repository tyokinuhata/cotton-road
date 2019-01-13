<?php

namespace App\Http\Requests\Admin\Orders\Addition;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 発注・入庫系 > コンテナ追加
 *
 * Class AddContainerRequest
 * @package App\Http\Requests\Admin\Orders\WaitContainer
 */
class AddContainerRequest extends FormRequest
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
            'product_id' => [ 'numeric', ],
        ];
    }
}
