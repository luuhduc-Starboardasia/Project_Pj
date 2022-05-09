@extends('include.menu-master')
@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="menu-infor">
            <div class="row mb-3">
                <div class="col">
                    <label for="inputPassword6" class="label"> <img src="{{asset('image/gm_simble.png')}}" alt="...">
                        Goodモチベーション</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="inputCity" class="form-label">自社内給与傾向メニュー</label>
                </div>
            </div>

            <div class="btn-group">
                <a href="/luachon.html" class="btn1">自社内給与傾向表示</a>
            </div>

            <div class="btn-group">
                <a href="/upload.html" class="btn2">自社内給与情報データ取込</a>
            </div>

            <div class="btn-group">
                <a href="#" class="btn3">戻る</a>
            </div>
        </div>
    </div>
@endsection
