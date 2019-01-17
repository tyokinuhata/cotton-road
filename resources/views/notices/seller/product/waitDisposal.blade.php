<div class="jumbotron">
    <h2 class="h2">{{ $notice->title }}</h2>
    <p>
        <a href="{{ url("/seller/products/detail/{$notice->product_id}") }}" target="_blank">{{ $notice->product->name }}</a>が廃棄処理待ちです。<br>
        もうしばらくお待ち下さい。<br>
        担当者: {{ $notice->fromUser->username }}({{ $notice->fromUser->user_id }})
    </p>
</div>