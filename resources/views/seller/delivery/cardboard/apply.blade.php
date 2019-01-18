@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">ダンボール申請</h1>
        <form method="POST" action="{{ url('/seller/delivery/cardboard/apply') }}">
            @csrf
            <div class="row">
                <select name="cardboard_id" class="form-control col-md-1" required autofocus>
                    @foreach ($cardboards as $cardboard)
                        <option value="{{ $cardboard->id }}">{{ $cardboard->size }}</option>
                    @endforeach
                </select>
                <span class="ml-1 mb-0 mt-2">サイズ ×</span>
                <input type="number" value="1" name="number" class="form-control col-md-1 ml-1" min="1" max="10" required>
                <span class="ml-1 mb-0 mt-2">個</span>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <button type="submit" class="btn btn-primary ml-1">申請</button>
            </div>
        </form>
        <div class="mt-2">
            <p>{{ session('success_msg') }}</p>
            @if ($errors->has('cardboard_id'))
                <p class="text-danger">{{ $errors->first('cardboard_id') }}</p>
            @endif
            @if ($errors->has('number'))
                <p class="text-danger">{{ $errors->first('number') }}</p>
            @endif
        </div>
    </div>
@endsection