<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div class="form-container">
        <h1>Login</h1>
        <div class="error-messages">
            <?= \Config\Services::validation()->listErrors(); ?>
        </div>
        <form method="post" action="/login">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

