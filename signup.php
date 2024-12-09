
<?php
require_once 'functions.php';

$message1 = '';
$message2 = ''; 
$userFile = 'TOPSECRET.txt';



if (isset($_SESSION['username'])) {
   
    $message2 = 'You are already logged in as ' . htmlspecialchars($_SESSION['username']) . '. You do not need to sign up again.';
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        clearSessionAndStartNew(); 

        if ($action === 'signup') {
            if (addUser($username, $password, $userFile)) {
                $message1 = 'Signup successful. You can now log in.';
            } else {
                $message1 = 'Username already exists. Please choose another.';
            }
        }
    } else {
        $message1 = 'Both fields are required.';
    }
}
?>


    <style>
      

       
    </style>

<div id='signup'>
<h1>Signup</h1>

<?php if (isset($_SESSION['username'])): ?>
    <div class="signup-container">
        <p class="message success-message"><?= $message2 ?></p>
        <div class="logout-link">
            <a href="?action=logout">Logout</a>
        </div>
    </div>
<?php else: ?>
    <div class="signup-container">
        <form method="POST">
            <h2>Create Your Account</h2>
            <input type="hidden" name="action" value="signup">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Signup</button>
        </form>
    </div>
<?php endif; ?>

<?php if (!empty($message1)): ?>
    <p class="message <?= (strpos($message1, 'success') !== false) ? 'success-message' : '' ?>"><?= htmlspecialchars($message1) ?></p>
<?php endif; ?>

</div>


