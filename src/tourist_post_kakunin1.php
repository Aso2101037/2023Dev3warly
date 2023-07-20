<?php
    //画像の処理
    $content = file_get_contents($_FILES['image']['tmp_name']);
    //公開する/しないでの処理
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
    $toursit_start_time = $_POST['timer-first0'];
    $tourist_finish_time = $_POST['timer-secend0'];
    $category = $_POST['category'];
    session_start();
    $email = $_SESSION['email'];
    require_once "DBmanager.php";
    $dbm = new DBManager();
    $dbm->tourist_spot($form_tourist_name,$form_address_text,$content,$toursit_start_time,$tourist_finish_time,$form_title,$form_tourist_comment,$category,$form_koukai);
    // header("Location: home.php?message=spot_complete");
    header("Location: home.php");
        exit;
?>