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
        <h2>Register</h2>
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
    </div>
</body>
</html>
