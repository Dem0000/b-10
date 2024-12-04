<?php session_start();

$userFile = 'TOPSECRET.txt';

function clearSessionAndStartNew()
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_destroy();
    }
    session_start();
}

/**
 * Adds a new user to the file if the username doesn't already exist.
 *
 * @param string $username
 * @param string $password
 * @param string $filePath
 * @return bool True on success, false if the username exists.
 */
function addUser($username, $password, $filePath)
{
    $users = file_exists($filePath) ? file($filePath, FILE_IGNORE_NEW_LINES) : [];

    foreach ($users as $user) {
        list($existingUsername,) = explode(':', $user);
        if ($existingUsername === $username) {
            return false;
        }
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    file_put_contents($filePath, "$username:$hashedPassword\n", FILE_APPEND);
    return true;
}

/**
 * Authenticates a user by matching username and password.
 *
 * @param string $username
 * @param string $password
 * @param string $filePath
 * @return bool True if authentication is successful, false otherwise.
 */
function authenticateUser($username, $password, $filePath)
{
    $users = file_exists($filePath) ? file($filePath, FILE_IGNORE_NEW_LINES) : [];

    foreach ($users as $user) {
        list($existingUsername, $storedHash) = explode(':', $user);
        if ($existingUsername === $username && password_verify($password, $storedHash)) {
            $_SESSION['username'] = $username;
            return true;
        }
    }
    return false;
}

function logoutUser()
{
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}


$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$screen = isset($_GET['screen']) ? $_GET['screen'] : 'large';
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    logoutUser();
}
?>
