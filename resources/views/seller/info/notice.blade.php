@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">通知</h1>
        <table class="table table-striped">
            @foreach ($notices as $notice)
                <tr>
                    <td>
                        {{ $notice->title }}
                        @if (!(boolean)$notice->is_read)
                            <span class="badge badge-success">New</span>
                        @endif
                    </td>
                    <td>{{ $notice->created_at }}</td>
                    <td>
                        <a href="{{ url("/seller/info/notice/{$notice->id}") }}">開く</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection