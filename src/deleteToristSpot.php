<?php
    require 'DBManager.php';
    $dbmng = new DBManager();
    $userList = $dbmng->deleteToristSpotTbl($_POST['tourist_spot_id']);

?>