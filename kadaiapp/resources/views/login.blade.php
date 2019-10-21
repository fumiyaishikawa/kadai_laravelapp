@extends('layouts.parent')

{{-- TitleとH2 --}}
@section('title', 'Login')

{{-- 個別ページの内容 --}}
@section('content')
<form action="/mytask" method="post">
    {{csrf_field() }}
    <p>
        <label for="mail">E-Mail ddress</label>
        <input type="text" name="mail" id="mail">
    </p>
    <p>
        <label for="pass">Password</label>
        <input type="text" name="pass" id="pass">
    </p>
    <p>
        <input type="checkbox" name="check" id="check">
        <label for="check">Remember Me</label>
    </p>
    <button type="submit">Login</button>
    <p><a href="/register">Forget Your Password?</a></p>
</form>
@endsection
