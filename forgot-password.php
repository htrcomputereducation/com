<?php
include('users.php');
$found = '';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    if(isset($users[$username])) {
        $found = "आपका पासवर्ड है: <strong>{$users[$username]}</strong>";
    } else {
        $error = "यूज़र नहीं मिला!";
    }
}
?>

<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <title>पासवर्ड भूल गए? - RaviPrint</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
  <h2>पासवर्ड भूल गए?</h2>
  <?php if($found): ?><p class="success"><?= $found ?></p><?php endif; ?>
  <?php if($error): ?><p class="error"><?= $error ?></p><?php endif; ?>
  <form method="POST">
    <input type="text" name="username" placeholder="अपना यूज़रनेम डालें" required>
    <button type="submit">पासवर्ड देखें</button>
  </form>
  <p><a href="login.php">वापस लॉगिन पर जाएं</a></p>
</div>
</body>
</html>
