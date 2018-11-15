<div class="container-fluid" style="height: 90%">
    <div class="row h-100">
        <nav class="col-md-2 d-none d-md-block sidebar border-right">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    @if (Auth::user()->type === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/user') }}">ユーザ情報</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/admin/user') }}">ユーザ操作</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/product') }}">商品一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/sales') }}">売上一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/yet') }}">未発注一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/wait') }}">入庫待ち一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/done') }}">入庫済み一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/shipments/yet') }}">未出庫一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/shipments/done') }}">出庫済み一覧</a>
                        </li>
                    @elseif (Auth::user()->type === 'seller')
                        <li class="nav-item">
                            <a class="nav-link" href="#">test</a>
                        </li>
                    @elseif (Auth::user()->type === 'customer')
                        <li class="nav-item">
                            <a class="nav-link" href="#">test</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 col-lg-10 pt-3 px-4">
            @yield('content')
        </main>
    </div>
</div>