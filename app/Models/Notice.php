<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 通知
 * to_user_idが0の場合は管理者一斉送信
 *
 * Class Notice
 * @package App\Models
 */
class Notice extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'title', 'message', 'from_user_id', 'to_user_id', 'product_id', 'is_read', ];

    /**
     * ユーザとのリレーション(送信者)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromUser()
    {
        return $this->belongsTo('App\Models\User', 'from_user_id');
    }

    /**
     * ユーザとのリレーション(受信者)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toUser()
    {
        return $this->belongsTo('App\Models\User', 'to_user_id');
    }

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
