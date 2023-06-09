<?php
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];
    require_once "DBmanager.php";
    $dbm = new DBManager();
    $dbm->serchUser($email,$password);
?>