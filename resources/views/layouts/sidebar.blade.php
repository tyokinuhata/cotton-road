<div class="container-fluid" style="height: 90%">
    <div class="row h-100">
        <nav class="col-md-2 d-none d-md-block sidebar mt-3 border-right">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    @if ((Auth::user()->type === 'admin') || (Auth::user()->type === 'employee'))
                        <li class="nav-item">インフォメーション</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/info/notice') }}">通知</a>
                        </li>
                        <li class="nav-item">ユーザ系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/user') }}">ユーザ情報</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/admin/user/operate') }}">ユーザ操作</a>
                        </li>
                        <li class="nav-item">商品系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/products') }}">商品一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/products/sales') }}">売上履歴</a>
                        </li>
                        <li class="nav-item">発注・入庫系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/cardboard') }}">ダンボール一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/newly') }}">新規商品一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/addition') }}">追加在庫一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/history') }}">搬入履歴</a>
                        </li>
                    @endif
                    @seller(Auth::user()->type)
                        <li class="nav-item">インフォメーション</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/info/notice') }}">通知</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/info/inquiry') }}">問い合わせ</a>
                        </li>
                        <li class="nav-item">ユーザ系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/user') }}">ユーザ情報</a>
                        </li>
                        <li class="nav-item">商品系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/products') }}">商品一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/products/sales') }}">売上履歴</a>
                        </li>
                        <li class="nav-item">納品系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/delivery/cardboard/apply') }}">ダンボール申請</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/delivery/cardboard') }}">ダンボール一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/delivery/products/sell') }}">商品出品申請</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/delivery/products/stock') }}">在庫・安全在庫追加申請</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/delivery/products/request') }}">返送・廃棄要求</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/delivery/history') }}">納品履歴</a>
                        </li>
                    @endseller
                    @customer(Auth::user()->type)
                        <li class="nav-item">ユーザ系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/user') }}">ユーザ情報</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/user/charge') }}">チャージ</a>
                        </li>
                        <li class="nav-item">商品系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/products') }}">商品一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/products/cart') }}">カート</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/products/history') }}">購入履歴</a>
                        </li>
                    @endcustomer
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 col-lg-10 pt-3 px-4">
            @yield('content')
        </main>
    </div>
</div>