
{{-- resources/views/layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'プロフィール紹介'を埋め込む --}}
@section('title','プロフィール紹介')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール紹介</h2>
            </div>
        </div>
    </div>
@endsection    