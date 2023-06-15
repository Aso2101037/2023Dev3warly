<?php
    require 'DBManager.php';
    $dbmng = new DBManager();
    $userList = $dbmng->deletePostTbl($_POST['id']);

?>