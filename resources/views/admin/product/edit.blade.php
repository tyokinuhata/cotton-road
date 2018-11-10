@extends('layouts.app')

@section('content')
    <div class="container">
        商品の編集<br>

        <div>
            <form>商品名:
                <input type="text" size="20"/>
            </form><br>

            <form>価格:
                <input type="text" size="5"/>円
            </form><br>
            <div class="edit"><input type="button" value="画像の追加"></div><br>
            <div class="edit"><input type="button" value="変更"></div><br>
        </div>
    </div>
@endsection