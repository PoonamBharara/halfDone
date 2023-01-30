<?php


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];


    $insertQuery = "INSERT INTO users(name, email, password) VALUES($name, $email, $password)";

    

}