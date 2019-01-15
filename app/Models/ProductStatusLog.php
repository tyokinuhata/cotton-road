<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 商品ステータスログ
 *
 * Class ProductStatusLog
 * @package App\Models
 */
class ProductStatusLog extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'product_id', 'product_status_id', 'user_id', ];

    /**
     * 商品とのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    /**
     * 商品ステータスとのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStatus()
    {
        return $this->belongsTo('App\Models\ProductStatus');
    }

    /**
     * ユーザとのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * created_atのアクセサー
     *
     * @param $value
     * @return array|mixed
     */
    public function getCreatedAtAttribute($value)
    {
        $value = explode(' ', $value);
        $value = str_replace('-', '/', $value[0]);
        return $value;
    }
}
