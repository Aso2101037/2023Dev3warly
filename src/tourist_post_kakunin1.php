<?php
    // $form_koukai=0;
    // if(isset($_POST['form_koukai'])) {
    //     $form_koukai = 1;
    // } else {
    //     $form_koukai = 0;
    // }
    // $form_title = $_POST['form_title'];
    // $form_tourist_name = $_POST['form_tourist_name'];
    // $form_tourist_comment = $_POST['form_tourist_comment'];
    // $form_jusyo = $_POST['form_jusyo'];
    // $form_address_text = $_POST['form_address_text'];
    // $form_time_text = $_POST['form_time_text'];
    // $category = $_POST['category'];
    // session_start();
    // $email = $_SESSION['email'];
    // require_once "DBmanager.php";
    // $dbm = new DBManager();
    // $dbm->tourist_spot($form_tourist_name,$form_address_text,0,0,0,$form_title,$form_tourist_comment,$category,$form_koukai);

    // header("Location: home.php?message=spot_complete");
    //     exit;
    $true = true;
    $false = false;
    if (isset($_POST['form_koukai'])) {
      $form=$true;
      } else {
        // checkboxがチェックされなかった場合の処理をここに記述します
        $form=$false;
      }
    // var_dump($form);
    $tourist_release = $form;
    var_dump($tourist_release);
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
    $dbm->tourist_spot($form_tourist_name,$form_address_text,0,0,0,$form_title,$form_tourist_comment,$category,$tourist_release);
    header("Location: home.php?message=spot_complete");
        exit;
?>