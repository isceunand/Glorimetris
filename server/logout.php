<?php
Session_start();
unset($_SESSION["username"]);
unset($_SESSION["roleuser"]);
session_destroy();

header("Location: ./index.php");
?>