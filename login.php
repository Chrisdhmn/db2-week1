<?php
// Simple login stub - no real authentication
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = isset($_POST['username']) ? trim($_POST['username']) : '';
    $pass = isset($_POST['password']) ? $_POST['password'] : '';
    // NOTE: This is a stub. Do NOT use this for production authentication.
    $message = 'Received login attempt for user: ' . htmlspecialchars($user, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login (stub)</title>
  <link rel="stylesheet" href="assets/css/login.css">
 </head>
<body>
  <div class="login-container">
    <form method="post" action="">
      <h1>Login</h1>
      <?php if ($message): ?>
        <div class="message"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></div>
      <?php endif; ?>
      <label for="username">Username</label>
      <input id="username" name="username" type="text" required>

      <label for="password">Password</label>
      <input id="password" name="password" type="password" required>

      <button type="submit">Sign In</button>
    </form>
  </div>
</body>
</html>
