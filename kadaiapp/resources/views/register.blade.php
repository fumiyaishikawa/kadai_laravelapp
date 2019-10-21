@extends('layouts.parent')

{{-- TitleとH2 --}}
@section('title', 'Register')

{{-- 個別ページの内容 --}}
@section('content')
<form action="/register.check" method="post">
    {{csrf_field() }}
    <p>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="mail">E-Mail ddress</label>
        <input type="text" name="mail" id="mail">
    </p>
    <p>
        <label for="pass">Password</label>
        <input type="text" name="pass" id="pass">
    </p>
    <p>
        <label for="conf_pass">Confirm Password</label>
        <input type="text" name="conf_pass" id="conf_pass">
    </p>
    <button type="submit">Register</button>
</form>
@endsection
