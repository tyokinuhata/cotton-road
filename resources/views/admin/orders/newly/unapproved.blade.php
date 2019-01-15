<div>
    @if (count($unapprovedProducts) === 0)
        <p>該当レコードが見つかりませんでした。</p>
    @else
        <table class="table table-striped">
            <tr>
                <th>ユーザID</th>
                <th>ユーザ名</th>
                <th>商品ID</th>
                <th>商品名</th>
                <th>在庫数</th>
                <th>安全在庫数</th>
                <th>申請日</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            @foreach ($unapprovedProducts as $product)
                <tr>
                    <td>
                        <a href="{{ url('/admin/user/operate?user_id=' . $product->user->user_id) }}" target="_blank">{{ $product->user->user_id }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/admin/user/operate?user_id=' . $product->user->user_id) }}" target="_blank">{{ $product->user->username }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/admin/products?keywords=' . $product->id) }}" target="_blank">{{ $product->id }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/admin/products?keywords=' . $product->id) }}" target="_blank">{{ $product->name }}</a>
                    </td>
                    <td>{{ $product->stock_number }}個</td>
                    <td>{{ $product->safety_stock_number }}個</td>
                    <td>{{ $product->created_at }}</td>
                    <td>
                        <form method="POST" action="{{ url('/admin/orders/newly/approve') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="user_id" value="{{ $product->user_id }}">
                            <button type="submit" class="btn btn-primary">承認</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ url('/admin/orders/newly/noApprove') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="user_id" value="{{ $product->user_id }}">
                            <button type="submit" class="btn btn-danger">否承認</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $unapprovedProducts->links() }}
    @endif
</div>