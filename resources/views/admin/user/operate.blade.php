@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">ユーザ操作</h1>
        <div>
            <form action="" method="post">
                <label for="">ユーザID</label>
                <input type="text" class="form-control d-inline col-md-7" name="user_id">
                <button type="submit" class="btn btn-danger">退会</button>
            </form>
        </div>
    </div>
@endsection