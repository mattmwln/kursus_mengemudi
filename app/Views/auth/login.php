<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form method="POST" action="/auth/login">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <br><br>
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>