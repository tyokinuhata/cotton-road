<div class="jumbotron">
    <h2 class="h2">{{ $notice->title }}</h2>
    <p>
        {{ $notice->cardboard->cardboard->size }}サイズ × {{ $notice->cardboard->number }}個受付しました。<br>
        配送までもうしばらくお待ちください。<br>
        担当者: {{ $notice->fromUser->username }}({{ $notice->fromUser->user_id }})
    </p>
</div>