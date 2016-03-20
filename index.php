<?php
//sets user info for logged in users
$userinfo = array(
                  'connor'=>'password'
                  );
$nameErr = $passwordErr "";
$name = $password "";
//starts the session
session_start();
//validate logout function
require_once 'classes/Login.php';
//creates an instance of the object
$login = new Login();
//validates the session ending on the logout
$login->validate_logout();
//validate based on if the username and password exsist in the userinfo array
if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        echo "user is validated!";
        $_SESSION['username'] = $_POST['username'];
    }
    else {
//Invalid Login Message
        echo "your username or password was typed incorrectly";
    };
}
//holds all sources and header
require 'header.php';

//shows if a user is logged in or not and toggles the form
require 'logged_in.php';

?>
<body>
    <!-- bottom background image -->
    <img class="background-wood" src="/assets/wood-background.png">




