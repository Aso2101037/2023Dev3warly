<?php
    if(isset($_POST['form_koukai'])) {
        $form_koukai = $_POST['form_koukai'];
    } else {
        $form_koukai = 0;
    }
    $form_title = $_POST['form_title'];
    $form_tourist_name = $_POST['form_restaurant_name'];
    $form_comment_text = $_POST['form_comment_text'];
    $form_jusyo = $_POST['form_jusyo'];
    $form_address_text = $_POST['form_address_text'];
    $form_time_text = $_POST['form_time_text'];
    $category = $_POST['form_category'];
    $yosan = $_POST['form_yosan_text'];
    session_start();
    $email = $_SESSION['email'];
    require_once "DBmanager.php";
    $dbm = new DBManager();
    $dbm->restaurant_post($form_title,0,$form_tourist_name,$form_comment_text,$form_address_text,0,0,$yosan,$category,0,$form_koukai);
    echo "DB保存完了<br>";
    echo $form_title;
?>