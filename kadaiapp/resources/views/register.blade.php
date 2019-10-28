@extends('layouts.parent')

{{-- TitleとH2 --}}
@section('title', 'Register')

{{-- 個別ページの内容 --}}
@section('content')
<p>テスト用：{{$user}}</p>
@if(count($errors) > 0)
<p>入力に問題があります。再入力してください。</p>
@endif
<form action="{{ route('viewregister') }}" method="post">
    {{ csrf_field() }}
    <!-- nameフィールド -->
    @if($errors->has('name'))
    <p>エラー：{{$errors->first('name')}}</p>
    @endif
    <p>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{old('name')}}">
    </p>

    <!-- mailフィールド -->
    @if($errors->has('mail'))
    <p>エラー：{{$errors->first('mail')}}</p>
    @endif
    <p>
        <label for="mail">E-Mail Address</label>
        <input type="text" name="mail" id="mail" value="{{old('mail')}}">
    </p>

    <!-- passフィールド -->
    @if($errors->has('pass'))
    <p>エラー：{{$errors->first('pass')}}</p>
    @endif
    <p>
        <label for="pass">Password</label>
        <input type="text" name="pass" id="pass">
    </p>

    <!-- conf_passフィールド -->
    @if($errors->has('conf_pass'))
    <p>エラー：{{$errors->first('conf_pass')}}</p>
    @endif
    <p>
        <label for="conf_pass">Confirm Password</label>
        <input type="text" name="conf_pass" id="conf_pass">
    </p>
    <button type="submit">Register</button>
</form>
@endsection
