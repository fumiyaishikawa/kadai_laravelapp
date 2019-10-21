<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
</head>
<body>
    <header>
        <h2>Laravel</h2>
        <p><a href="/login">Login</a></p>
        <p><a href="/register">Register</a></p>
    </header>

    <div class="todo-block">
        <h2>@yield('title')</h2>
        {{-- 個別ページの内容 --}}
        @yield('content')
    </div>
</body>
</html>
