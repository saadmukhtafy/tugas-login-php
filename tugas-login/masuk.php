
<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Masuk</title>
</head>
<body>

    <h1>Selamat Datang!</h1>

    <p>Hai kawan, kamu berhasil masuk.</p>

    <!-- <p>
        Username:
        <?php echo htmlspecialchars($_SESSION['username']); ?>
    </p> -->

</body>
</html>
