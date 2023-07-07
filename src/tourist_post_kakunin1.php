<?php
    if(isset($_POST['form_koukai'])) {
        $form_koukai = $_POST['form_koukai'];
    } else {
        $form_koukai = 0;
    }
    $form_title = $_POST['form_title'];
    $form_tourist_name = $_POST['form_tourist_name'];
    $form_tourist_comment = $_POST['form_tourist_comment'];
    $form_jusyo = $_POST['form_jusyo'];
    $form_address_text = $_POST['form_address_text'];
    $form_time_text = $_POST['form_time_text'];
    $category = $_POST['category'];
    session_start();
    $email = $_SESSION['email'];
    require_once "DBmanager.php";
    $dbm = new DBManager();
    $dbm->tourist_spot($form_tourist_name,$form_address_text,0,0,0,$form_title,$form_tourist_comment,$category,0,$form_koukai);
    echo "DB保存完了<br>";
    echo $form_title;
?>