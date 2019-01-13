<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 商品
 *
 * Class Products
 * @package App\Models
 */
class Product extends Model
{
    use SoftDeletes;

    /**
     * ソフトデリート(論理削除)にする
     *
     * @var array
     */
    protected $dates = [ 'deleted_at' ];

    /**
     * @var array
     */
    protected $fillable = [ 'name', 'description', 'price', 'stock_number', 'safety_stock_number', 'category', 'user_id', 'product_category_id', 'product_status_id', ];

    /**
     * 商品カテゴリとのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory');
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
