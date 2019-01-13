<div>
    @if (count($unapprovedStocks) === 0)
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
                <th>追加在庫数</th>
                <th>申請日</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            @foreach ($unapprovedStocks as $stock)
                <tr>
                    <td>
                        <a href="{{ url('/admin/user/operate?user_id=' . $stock->user->user_id) }}" target="_blank">{{ $stock->user->user_id }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/admin/user/operate?user_id=' . $stock->user->user_id) }}" target="_blank">{{ $stock->user->username }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/admin/products?keywords=' . $stock->id) }}" target="_blank">{{ $stock->id }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/admin/products?keywords=' . $stock->id) }}" target="_blank">{{ $stock->name }}</a>
                    </td>
                    <td>{{ $stock->stock_number }}個</td>
                    <td>{{ $stock->safety_stock_number }}個</td>
                    <td>{{ $stock->stock_additions }}個</td>
                    <td>{{ $stock->created_at }}</td>
                    <td>
                        <form method="POST" action="{{ url('/admin/orders/addition/approve') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $stock->id }}">
                            <button type="submit" class="btn btn-primary">承認</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ url('/admin/orders/addition/noApprove') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $stock->id }}">
                            <button type="submit" class="btn btn-danger">否承認</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $unapprovedStocks->links() }}
    @endif
</div>