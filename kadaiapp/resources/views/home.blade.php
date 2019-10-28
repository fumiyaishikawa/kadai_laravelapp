@extends('layouts.parent')

{{-- TitleとH2 --}}
@section('title', 'Dashboard')

{{-- ヘッダーの追加要素 --}}
@section('header')
<p>{{ $user }}</p>
<p><a href="{{ route('viewlogin') }}">Logout</a></p>
@endsection

{{-- 個別ページの内容 --}}
@section('content')
<p>You are logged in!</p>

@endsection
