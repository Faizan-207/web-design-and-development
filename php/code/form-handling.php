<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    echo "Welcome, " . htmlspecialchars($username) . "!\n";
}
?>