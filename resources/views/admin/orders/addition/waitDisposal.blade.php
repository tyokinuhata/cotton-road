<div>
    @if (count($waitDisposalStocks) === 0)
        <p>該当レコードが見つかりませんでした。</p>
    @else
        <table class="table table-striped">
            <tr>
                <th>ユーザID</th>
                <th>ユーザ名</th>
                <th>商品ID</th>
                <th>商品名</th>
                <th>個数</th>
                <th>安全在庫数</th>
                <th>追加在庫数</th>
                <th>ステータス移動日</th>
                <th>&nbsp;</th>
            </tr>
            @foreach ($waitDisposalStocks as $stock)
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
                    <td>{{ $stock->updated_at }}</td>
                    <td>
                        <form method="POST" action="{{ url('/admin/orders/addition/disposal') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $stock->id }}">
                            <button type="submit" class="btn btn-danger">廃棄</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $waitDisposalStocks->links() }}
    @endif
</div>