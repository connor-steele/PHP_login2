<?php
class Login {
    // logs out the user and resets the session
    function validate_logout() {
        if(isset($_GET['logout'])) {
            $_SESSION['username'] = '';
            header('Location: ' . $_SERVER['PHP_SELF']);
        }
    }
}
?>
