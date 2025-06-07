<?php
if (isset($_COOKIE['loggedin']) && $_COOKIE['loggedin'] == "yes") {
    echo "Welcome to your dashboard!";
} else {
    echo "Access denied. Please login.";
}
setcookie("username", "", time() - 3600, "/");
echo "Cookie deleted.";
?>
