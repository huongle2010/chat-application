<?php
require "fonction.php";
$error = null;
if (isset($_POST['submit'])) {
    $user = $_POST['name'];
    $message = $_POST['message'];
    create_message($user, $message);
}


?>