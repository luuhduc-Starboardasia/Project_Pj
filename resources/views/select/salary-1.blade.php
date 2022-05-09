@extends('include.select-master')
@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <h5>社の「地域」「業種」を選択してください。</h5>
            </div>
        </div>
        <div class="row content mt-3">
            <div class="col-1">
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">地域
                    </label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col-5">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">業種
                    </label>
                    <select class="form-select" id="inputGroupSelect01">
                        @foreach ($data as $dt)
                            <option></option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row">
            <div class="col-7"></div>
            <div class="col-5 d-flex justify-content-center">
                <a href="/tienluong.html"> 結果表示 </a>
            </div>
        </div>

        <div class="row title mt-3 mb-3">
            <div class="col-7"></div>
            <div class="col-5 d-flex justify-content-center">
                <a href="#" style="background-color: #ED7D31; "> 戻る </a>
            </div>
        </div>
    </div>
@endsection
