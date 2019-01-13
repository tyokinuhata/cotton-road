@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">新規商品一覧</h1>

        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <a href="#unapproved" class="nav-link" id="unapproved-tab">未承認</a>
            </li>
            <li class="nav-item">
                <a href="#waitContainer" class="nav-link" id="waitContainer-tab">コンテナ待ち</a>
            </li>
            <li class="nav-item">
                <a href="#waitBack" class="nav-link" id="waitBack-tab">返送待ち</a>
            </li>
            <li class="nav-item">
                <a href="#waitDisposal" class="nav-link" id="waitDisposal-tab">廃棄処分待ち</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="unapproved" class="tab-pane">
                <div>
                    @include('admin.orders.newly.unapproved')
                </div>
            </div>

            <div id="waitContainer" class="tab-pane">
                <div>
                    @include('admin.orders.newly.waitContainer')
                </div>
            </div>

            <div id="waitBack" class="tab-pane">
                <div>
                    @include('admin.orders.newly.waitBack')
                </div>
            </div>

            <div id="waitDisposal" class="tab-pane">
                <div>
                    @include('admin.orders.newly.waitDisposal')
                </div>
            </div>
        </div>

        <button type="button" class="hoge">aaaa</button>
    </div>

    {{--ページネーションとタブを共存させる魔法のコードです--}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
      $(function() {
        let statuses = [ 'unapproved', 'waitContainer', 'waitBack', 'waitDisposal' ]
        let currentStatus = sessionStorage.getItem('newlyTab') ? sessionStorage.getItem('newlyTab') : 'unapproved'

        $('#' + currentStatus + '-tab').addClass('active')
        $('#' + currentStatus).addClass('active')

        for (let status of statuses) {
          $('#' + status + '-tab').on('click', function (e) {
            e.preventDefault()

            $('#' + currentStatus + '-tab').removeClass('active')
            $('#' + status + '-tab').addClass('active')

            $('#' + currentStatus).removeClass('active')
            $('#' + status).addClass('active')
            currentStatus = status
            sessionStorage.setItem('newlyTab', status)
          })
        }
      })
    </script>
@endsection