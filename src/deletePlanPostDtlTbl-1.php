<?php
    require 'DBManager.php';
    $dbmng = new DBManager();
    $userList = $dbmng->deletePlanPostDtlTbl($_POST['tourist_spot_id']);

?>