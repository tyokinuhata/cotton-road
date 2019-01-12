<?php

namespace App\Http\Controllers\Seller\Delivery;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Http\Requests\Seller\Delivery\SellRequest;
use Auth;

/**
 * 商品発送系コントローラ
 *
 * Class ProductsController
 * @package App\Http\Controllers\Seller\Delivery
 */
class ProductsController extends Controller
{
    /**
     * 商品出品画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sell()
    {
        $productCategories = ProductCategory::all();

        return view('seller.delivery.products.sell', [
        'productCategories' => $productCategories,
        ]);
    }

    /**
     * 商品出品処理
     *
     * @param SellRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postSell(SellRequest $request)
    {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'amount' => $request->amount,
            'user_id' => Auth::id(),
            'product_category_id' => $request->category,
            'product_status_id' => 1,
        ]);

        return redirect('/seller/delivery/products/sell');
    }

    /**
     * 返送要求画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function back()
    {
        return view('seller.delivery.products.back');
    }

    /**
     * 廃棄要求画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function disposal()
    {
        return view('seller.delivery.products.disposal');
    }
}
