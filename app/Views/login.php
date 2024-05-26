<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?= \Config\Services::validation()->listErrors(); ?>
    <form method="post" action="/login">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
