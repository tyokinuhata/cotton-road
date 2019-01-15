<?php

namespace App\Http\Controllers\Customer\Products;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\Products\Cart\DeleteRequest;
use App\Http\Requests\Customer\Products\Cart\BuyRequest;
use Auth;

/**
 * カートのコントローラー
 *
 * Class CartController
 * @package App\Http\Controllers\Customer\Products
 */
class CartController extends Controller
{
    /**
     * カート画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cart()
    {
        $carts = Cart::where('user_id', Auth::id())->where('is_bought', false)->get();

        if (!empty($carts)) {
            $carts->total = $carts->sum(function ($cart) {
                return $cart->product->price;
            });
        }

        return view('customer.products.cart', [
            'carts' => $carts,
        ]);
    }

    /**
     * カートから削除
     *
     * @param DeleteRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(DeleteRequest $request)
    {
        Cart::destroy('id', $request->cart_id);
        return redirect('/customer/products/cart')->with('success_msg', '商品を削除しました。');
    }

    /**
     * 購入処理
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function buy()
    {
        Cart::where('user_id', Auth::id())->where('is_bought', false)->update([
            'is_bought' => true,
        ]);
        return redirect('/customer/products/cart')->with('success_msg', '購入が完了しました。');
    }
}
