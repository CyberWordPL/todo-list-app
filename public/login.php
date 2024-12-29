<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.orange.min.css"
    >
    <title>Todo Application - Login</title>
</head>
<body>
    <?php require '../template/navbar.php'; ?>

    <form action="/auth.php" method="POST" class="container">
        <input type="hidden" id="auth_type" value="LOGIN_AUTH"/>
        <fieldset>
            <label>
                Email
                <input type="email"
                    name="email"
                    placeholder="Email"
                    autocomplete="email"
                />
            </label>
            <label>
                Password
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                />
            </label>
            <input type="submit" value="Login"/>
        </fieldset>
    </form>
</body>
</html>