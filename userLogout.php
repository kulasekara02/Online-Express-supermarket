<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["shopping_cart"]);
header("Location:index.php");
?>
