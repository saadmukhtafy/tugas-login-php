<?php
session_start();

$pesan_error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username dan password
    $user_benar = 'admin';
    $pass_benar = '12345';

    if ($username == $user_benar && $password == $pass_benar) {

        session_regenerate_id(true);

        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;

        header('Location: masuk.php');
        exit;
    } else {
        $pesan_error = 'Username atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="login-container">

        <div class="logo">
            <img src="logo.jpg" alt="Logo Admin">
        </div>

        <h2>Login Admin</h2>
        <p>Silakan masukkan akun admin</p>

        <?php if ($pesan_error != '') { ?>
            <p class="error">
                <?php echo $pesan_error; ?>
            </p>
        <?php } ?>

        <form action="login.php" method="POST">

            <label>Username</label>
            <input type="text" name="username"
                placeholder="Masukkan username" required>

            <label>Password</label>
            <input type="password" name="password"
                placeholder="Masukkan password" required>
            <p> username : admin <br> sandi : 12345
            </p>

            <button type="submit">Login</button>

        </form>

    </div>

</body>

</html>