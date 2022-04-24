<?php
session_start();
if (isset($_SESSION['user_name'])) {
    echo 'Hello '.$_SESSION['user_name'].'<br>';
    echo '<a href="exit.php">Завершить</a>';
}
else {
    include 'myinfo.php';
}

