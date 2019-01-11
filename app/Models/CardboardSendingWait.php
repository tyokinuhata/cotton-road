<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardboardSendingWait extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'number', 'status', 'cardboard_id', 'user_id', ];

    /**
     * ダンボールとのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cardboard()
    {
        return $this->belongsTo('App\Models\Cardboard');
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
