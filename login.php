<?php
if ($_POST['username'] == 'admin' && $_POST['password'] == '1234') {
    setcookie("loggedin", "yes", time() + 3600, "/");
    echo "Login successful!";
} else {
    echo "Invalid credentials.";
}
?>
