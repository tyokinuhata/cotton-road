<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 在庫追加分ステータスログ
 *
 * Class StockAdditionStatusLog
 * @package App\Models
 */
class StockAdditionStatusLog extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'product_id', 'stock_addition_status_id', 'user_id', ];

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
     * 在庫追加分ステータスとのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stockAdditionStatus()
    {
        return $this->belongsTo('App\Models\StockAdditionStatus');
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
