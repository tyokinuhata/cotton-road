@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">ユーザ操作</h1>
        <div>
            <form method="POST" action="{{ url('/admin/user/operate') }}">
                @csrf
                <input type="text" placeholder="ユーザID" class="form-control col-md-8 d-inline mb-4 mr-2" name="user_id" autofocus required>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>
            @isset ($user)
                <table class="table">
                    <tr>
                        <th>ユーザID</th>
                        <td>{{ $user->user_id }}</td>
                    </tr>
                    <tr>
                        <th>ユーザ名</th>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>{{ $user->sex }}</td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>{{ $user->address }}</td>
                    </tr>
                    <tr>
                        <th>年齢</th>
                        <td>{{ $user->age }}</td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>チャージ残高</th>
                        <td>¥{{ $user->charge }}</td>
                    </tr>
                    <tr>
                        <th>登録日</th>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    <tr>
                        <th>状態</th>
                        <td>
                            @if (!is_null($user->deleted_at))
                                <span class="badge badge-pill badge-danger">凍結</span>
                            @else
                                <span class="badge badge-pill badge-primary">通常</span>
                            @endif
                        </td>
                    </tr>
                </table>
                <div>
                    <a href="{{ url("/admin/user/operate/history/{$user->user_id}") }}" class="btn btn-primary">購入履歴</a>
                    <a href="{{ url("/admin/user/operate/edit/{$user->user_id}") }}" class="btn btn-warning">編集</a>
                    @if (is_null($user->deleted_at))
                        <form method="POST" action="{{ url('admin/user/operate/lock') }}" class="d-inline">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                            <button type="submit" class="btn btn-danger">凍結</button>
                        </form>
                    @else
                        <form method="POST" action="{{ url('admin/user/operate/unlock') }}" class="d-inline">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                            <button type="submit" class="btn btn-danger">凍結解除</button>
                        </form>
                    @endif
                </div>
            @else
                <p>該当ユーザが見つかりませんでした。</p>
            @endisset
        </div>
    </div>
@endsection