<div>
    @if (count($waitDisposalProducts) === 0)
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
                <th>ステータス移動日</th>
                <th>&nbsp;</th>
            </tr>
            @foreach ($waitDisposalProducts as $product)
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
                    <td>{{ $product->updated_at }}</td>
                    <td>
                        <form method="POST" action="{{ url('/admin/orders/newly/disposal') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="user_id" value="{{ $product->user_id }}">
                            <button type="submit" class="btn btn-danger">廃棄</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $waitDisposalProducts->links() }}
    @endif
</div>