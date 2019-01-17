<div class="jumbotron">
    <h2 class="h2">{{ $notice->title }}</h2>
    <p>
        <a href="{{ url("/seller/products/detail/{$notice->product_id}") }}" target="_blank">{{ $notice->product->name }}</a>が承認されませんでした。<br>
        返送しますか？廃棄しますか？
    </p>
    <form method="POST" action="{{ url('/seller/info/notice/request/back') }}" class="d-inline">
        @csrf
        <input type="hidden" name="notice_id" value="{{ $notice->id }}">
        <input type="hidden" name="product_id" value="{{ $notice->product_id }}">
        <button type="submit" class="btn btn-success">返送</button>
    </form>
    <form method="POST" action="{{ url('/seller/info/notice/request/disposal') }}" class="d-inline">
        @csrf
        <input type="hidden" name="notice_id" value="{{ $notice->id }}">
        <input type="hidden" name="product_id" value="{{ $notice->product_id }}">
        <button type="submit" class="btn btn-danger">廃棄</button>
    </form>
    <p>{{ session('success_msg') }}</p>
    <p class="mt-2">
        担当者: {{ $notice->fromUser->username }}({{ $notice->fromUser->user_id }})
    </p>
</div>