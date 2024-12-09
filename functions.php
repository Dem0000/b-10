<?php session_start();

$userFile = 'TOPSECRET.txt';

function clearSessionAndStartNew()
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_destroy();
    }
    session_start();
}


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


function generatestars($rating) {
    $fullstars = floor($rating); 
    $emptystars = 5 - $fullstars; 
    
    $starsHTML = '';
    for ($i = 0; $i < $fullstars; $i++) {
        $starsHTML .= "<span class='star'>&#9733;</span>"; 
    }
    for ($i = 0; $i < $emptystars; $i++) {
        $starsHTML .= "<span class='star'>&#9734;</span>"; 
    }
    
    return $starsHTML;
}



function Auth($page, $screen) {
  
    echo '<link rel="stylesheet" href="styles/gradient.css">';
    
    if ($screen === 'small') {
       
        include($page . '.php');
    } elseif ($screen === 'large') {
        
        echo "<div id='register'>";
        include('signup.php');
        include('login.php');
        echo "</div>";
    }
}


function Submitpage() {
    echo "<style>header {background: linear-gradient(to right, #036a96, #00BFFF);} </style>";
    include('submit.php');
}













?>



