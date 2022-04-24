<?php
if (isset($_POST['user_name'])) {
    session_start();
    $_SESSION['user_name'] = $_POST['user_name'];
    header("Location: index.php");
}