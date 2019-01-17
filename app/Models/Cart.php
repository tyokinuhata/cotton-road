<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * カート
 *
 * Class Cart
 * @package App
 */
class Cart extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'product_id', 'user_id', 'amount', ];

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

    /**
     * updated_atのアクセサー
     *
     * @param $value
     * @return array|mixed
     */
    public function getUpdatedAtAttribute($value)
    {
        $value = explode(' ', $value);
        $value = str_replace('-', '/', $value[0]);
        return $value;
    }
}
