<?php

namespace App\Http\Requests\Admin\Orders\Newly;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 発注・入庫系 > 廃棄
 *
 * Class DisposalRequest
 * @package App\Http\Requests\Admin\Orders\WaitDisposal
 */
class DisposalRequest extends FormRequest
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
            'user_id' => [ 'numeric', ],
        ];
    }
}
