<?php
require_once 'functions.php';

$message = '';
$message3 = ''; 


if (isset($_SESSION['username'])) {
  
    $message3 = 'You are already logged in as ' . htmlspecialchars($_SESSION['username']);
} if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_SESSION['username'])) {
    $action = $_POST['action'];
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        clearSessionAndStartNew(); 
        if ($action === 'login') {
            if (authenticateUser($username, $password, $userFile)) {
                
                $message3 = "Welcome back, $username!";
            } else {
                $message = 'Invalid username or password.';
            }
        }
    } else {
        $message = 'Both fields are required.';
    }
}
?>

<div id='login'>
    <h1>Login</h1>

    <?php if (isset($_SESSION['username'])): ?>
        <div class="login-container">
            <p class="message success-message"><?= $message3 ?></p>
            <div class="logout-link">
                <a href="?action=logout">Logout</a>
            </div>
        </div>
    <?php else: ?>
        <div class="login-container">
            <form method="POST">
                <h2>Login to Your Account</h2>
                <input type="hidden" name="action" value="login">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    <?php endif; ?>

    <?php if (!empty($message) && !isset($_SESSION['username'])): ?>
        <p class="message <?= (strpos($message, 'Invalid') !== false) ? '' : 'success-message' ?>"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
</div>
