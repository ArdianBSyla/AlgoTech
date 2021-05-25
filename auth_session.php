<?php
    session_start();
    if(!isset($_SESSION["personalId"])) {
        header("Location: login.php");
        exit();
    }
?>
