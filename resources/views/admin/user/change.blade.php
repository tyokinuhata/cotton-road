@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ユーザー情報変更') }}</div>
                <div class="card-body">

                    <div class="form-group row">
                        <label for="user_id" class="col-md-2 col-form-label text-md-right">{{ __('ユーザーID') }}</label>
                        <div class="col-md-6">
                            <input id="user_id" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="user_id" class="col-md-2 col-form-label text-md-right">{{ __('ID') }}</label>

                        <div class="col-md-6">
                            <input id="user_id" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="user_id" class="col-md-2 col-form-label text-md-right">{{ __('登録日') }}</label>

                        <div class="col-md-6">
                            <input id="user_id" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-3 text-right">
                            <button class="btn btn-primary">
                                {{ __('変更') }}</button></div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection