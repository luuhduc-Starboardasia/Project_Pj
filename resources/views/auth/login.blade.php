@extends('include.menu-master')
@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle">
        <form method="" action="#">
            <div class="row mb-3">
                <div class="col">
                    <label for="inputPassword6" class="label"> <img src="{{ asset('image/gm_simble.png') }}"
                            alt="..."> Goodモチベーション
                    </label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="inputCity" class="form-label">ログイン</label>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm col-form-label">ログインID</label>
                <div class="col">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword6" class="col-sm col-form-label">パスワード</label>
                <div class="col">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary">ログイン</button>
                </div>
            </div>
        </form>
    </div>
@endsection
