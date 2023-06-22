<?php
    require 'DBManager.php';
    $dbmng = new DBManager();
    $userList = $dbmng->deletePlanPostDtlTbl($_POST['id']);

?>