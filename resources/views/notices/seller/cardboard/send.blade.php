<div class="jumbotron">
    <h2 class="h2">{{ $notice->title }}</h2>
    <p>
        {{ $notice->cardboard->cardboard->size }}サイズ × {{ $notice->cardboard->number }}個配送しました。<br>
        担当者: {{ $notice->fromUser->username }}({{ $notice->fromUser->user_id }})
    </p>
</div>