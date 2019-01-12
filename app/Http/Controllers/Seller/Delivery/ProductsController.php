<?php

namespace App\Http\Controllers\Seller\Delivery;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Http\Requests\Seller\Delivery\SellRequest;
use App\Http\Requests\Seller\Delivery\StockRequest;
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
            'stock_number' => $request->stock_number,
            'safety_stock_number' => $request->safety_stock_number,
            'user_id' => Auth::id(),
            'product_category_id' => $request->category,
            'product_status_id' => 1,
        ]);

        return redirect('/seller/delivery/products/sell')->with('success_msg', '追加に成功しました。');
    }

    /**
     * 在庫追加画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function stock()
    {
        return view('seller.delivery.products.stock');
    }

    public function postStock(StockRequest $request)
    {
        $column = $request->type == 1 ? 'stock_number' : 'safety_stock_number';
        Product::where('user_id', Auth::id())->where('id', $request->product_id)->increment($column, $request->stock_number);

        return redirect('/seller/delivery/products/stock')->with('success_msg', '申請しました。');
    }

    /**
     * 返送要求画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function request()
    {
        return view('seller.delivery.products.request');
    }
}
