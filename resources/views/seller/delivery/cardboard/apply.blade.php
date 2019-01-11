@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">ダンボール申請</h1>
        <form action="" method="POST">
            @csrf
            <div class="row">
                <select name="cardboard_id" class="form-control col-md-1">
                    @foreach ($cardboards as $cardboard)
                        <option value="{{ $cardboard->id }}">{{ $cardboard->size }}</option>
                    @endforeach
                </select>
                <input type="number" value="1" name="number" class="form-control col-md-1 ml-1">
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <button type="submit" class="btn btn-primary ml-1">申請</button>
            </div>
        </form>
    </div>
@endsection