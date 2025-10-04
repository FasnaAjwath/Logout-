<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1 class="login">Login Page</h1>
    <div class="container">
        <form action="login_authentication.php" method = "POST">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username"><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password"><br><br>

            <button type="submit" name = "login_authentication">Login</button>
        </form>
    </div>
</body>
</html>