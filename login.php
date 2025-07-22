<?php
include('users.php');

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($users[$username]) && $users[$username] == $password){
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "गलत यूज़रनेम या पासवर्ड!";
    }
}
?>

<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <title>Login - RaviPrint</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-container">
    <h2>लॉगिन करें</h2>
    <?php if($error): ?>
      <p class="error"><?= $error ?></p>
    <?php endif; ?>
    <form method="POST" action="">
      <input type="text" name="username" placeholder="यूज़रनेम" required>
      <input type="password" name="password" placeholder="पासवर्ड" required>
      <button type="submit">लॉगिन</button>
    </form>
    <p><a href="register.php">नया अकाउंट बनाएं</a></p>
    <p><a href="forgot-password.php">पासवर्ड भूल गए?</a></p>
  </div>
</body>
</html>
