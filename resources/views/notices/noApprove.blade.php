<div class="jumbotron">
    <h2 class="h2">{{ $notice->title }}</h2>
    <p>
        <a href="{{ url("/seller/products/detail/{$notice->product_id}") }}" target="_blank">{{ $notice->product->name }}</a>が承認されませんでした。<br>
        返送しますか？廃棄しますか？
    </p>
    <form method="POST" action="{{ url('') }}" class="d-inline">
        <button type="submit" class="btn btn-success">返送</button>
    </form>
    <form method="POST" action="{{ url('') }}" class="d-inline">
        <button type="submit" class="btn btn-danger">廃棄</button>
    </form>
    <p>
        担当者: {{ $notice->fromUser->username }}({{ $notice->fromUser->user_id }})
    </p>
</div>