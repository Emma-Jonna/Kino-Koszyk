<?php
if(isset($_POST['name'], $_POST['email'], $_POST['message'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    mail($email, "Contact", $message);
}