@extends('include.menu-master')
@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="upload-form">
            <div class="row mb-3">
                <div class="col">
                    <label for="inputPassword6" class="label"> <img src="{{ asset('image/gm_simble.png') }}"
                            alt="...">
                        Goodモチベーション</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="inputCity" class="form-label">ログイン</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input type="" class="form-control" id="inputEmail3" placeholder="選択したファイル" disabled>
                </div>
                <div class="col">
                    <input type="file" name="" id="file">
                    <label for="file" class="label3" id="">アップロード </label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <a href="" class="upload">実行</a>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-auto">
                    <button type="button">戻る</button>
                </div>
            </div>
        </div>
    </div>
@endsection
