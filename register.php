<?php
$success = '';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_user = $_POST['username'];
    $new_pass = $_POST['password'];

    if (!empty($new_user) && !empty($new_pass)) {
        $file = fopen("users.php", "a");
        fwrite($file, "\n\$users['$new_user'] = '$new_pass';");
        fclose($file);
        $success = "रजिस्ट्रेशन सफल! अब लॉगिन करें।";
    } else {
        $error = "सभी फ़ील्ड भरें।";
    }
}
?>

<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <title>रजिस्टर - RaviPrint</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
  <h2>रजिस्ट्रेशन</h2>
  <?php if($success): ?><p class="success"><?= $success ?></p><?php endif; ?>
  <?php if($error): ?><p class="error"><?= $error ?></p><?php endif; ?>
  <form method="POST">
    <input type="text" name="username" placeholder="यूज़रनेम" required>
    <input type="password" name="password" placeholder="पासवर्ड" required>
    <button type="submit">रजिस्टर करें</button>
  </form>
  <p><a href="login.php">पहले से रजिस्टर हैं? लॉगिन करें</a></p>
</div>
</body>
</html>
