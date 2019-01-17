<div class="jumbotron">
    <h2 class="h2">{{ $notice->title }}</h2>
    <p>
        <a href="{{ url("/seller/products/detail/{$notice->product_id}") }}" target="_blank">{{ $notice->product->name }}</a>を確認後, 廃棄待ちステータスへ移動してください。<br>
        送信者: {{ $notice->fromUser->username }}({{ $notice->fromUser->user_id }})
    </p>
</div>