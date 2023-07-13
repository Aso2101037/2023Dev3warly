<?php
    require 'DBManager.php';
    $dbmng = new DBManager();
    $userList = $dbmng->deleteToristSpotTbl($_POST['id']);

?>