@extends('include.menu-master')
@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="menu-form">
            <div class="row mb-3">
                <div class="col">
                    <label for="inputPassword6" class="label"> <img src="{{asset('image/gm_simble.png')}}" alt="...">
                        Goodモチベーション</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="inputCity" class="form-label">メニュー</label>
                </div>
            </div>

            <div class="btn-group">
                <a href="/menu_thongtinluong.html" class="btn1">自社内給与傾向</a>
            </div>

            <div class="btn-group">
                <a href="/luachon2.html" class="btn2">採用時適正報酬</a>
            </div>

            <div class="btn-group">
                <a href="#" class="btn3">採用時レベル測定(IT業界)</a>
            </div>
        </div>
    </div>
@endsection
