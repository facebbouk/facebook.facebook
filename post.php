<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Di sini Anda dapat melakukan validasi atau pemeriksaan kredensial dengan data yang diterima
    // Contoh sederhana, jika username dan password benar, akan meneruskan ke halaman selamat datang, jika salah akan menampilkan pesan kesalahan

    // Ganti "username" dan "password" dengan nilai sesuai yang Anda inginkan untuk mengizinkan akses
    $allowedUsername = "username";
    $allowedPassword = "password";

    if ($username === $allowedUsername && $password === $allowedPassword) {
        header("Location: welcome.php");
        exit;
    } else {
        $errorMessage = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Post Handling</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form class="login-form" method="post" action="post.php">
            <h2>Selamat datang</h2>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <?php if (isset($errorMessage)) { ?>
                <p class="error"><?php echo $errorMessage; ?></p>
            <?php } ?>
        </form>
    </div>
</body>
</html>
