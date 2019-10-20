<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ToDo list</title>
</head>
<body>
    <header>
        <h2>Laravel</h2>
        <p><a href="/login">Login</a></p>
        <p><a href="/register">Register</a></p>
    </header>

    <div class="todo-block">
        <h2>Login</h2>
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
    </div>
</body>
</html>
