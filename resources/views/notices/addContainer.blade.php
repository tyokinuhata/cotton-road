<div class="jumbotron">
    <h2 class="h2">{{ $notice->title }}</h2>
    <p>
        <a href="{{ url("/seller/products/detail/{$notice->product_id}") }}" target="_blank">{{ $notice->product->name }}</a>がコンテナに棚入れされました。<br>
        これにより商品が購入できる状態になります。<br>
        担当者: {{ $notice->fromUser->username }}({{ $notice->fromUser->user_id }})
    </p>
</div>