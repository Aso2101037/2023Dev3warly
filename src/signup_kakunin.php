<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $date = date("y-m-d");
        $content = file_get_contents($_FILES['image']['tmp_name']);

        if((isset($_POST["year"]))&&(isset($_POST["month"]))&&(isset($_POST["day"]))) {
            // セレクトボックスで選択された値を受け取る
            $year = $_POST["year"];
            $month = $_POST["month"];
            $day = $_POST["day"];
            
            // 入力された日付を指定の形式で結合
            $dateString = $year . "-" . $month . "-" . $day;
            
            // 現在の日付を指定の形式で取得
            $currentDate = date("Y-m-d");
            
            // DateTimeオブジェクトを使用して日付の差を計算
            $userDate = new DateTime($dateString);
            $currentDateTime = new DateTime($currentDate);
            $diff = $currentDateTime->diff($userDate);
            
            // 差分を取得
            $yearDiff = $diff->y;
            $monthDiff = $diff->m;
            $dayDiff = $diff->d;
            echo "年齢　　　　　: {$yearDiff}歳"."<br>";
            // 受け取った値を画面に出力
            
         };
        require_once "DBmanager.php";
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }else{
            $password = "未定義";
        }

        echo "パスワード　　:" . $password . "<br>";
        if(isset($_POST['nickname'])){
            $username = $_POST['nickname'];
        }else{
            $username = "未定義";
        }
        echo "ニックネーム　:" . $username . "<br>";
        if(isset($_POST['mailaddress'])){
            $user_mailaddress = $_POST['mailaddress'];
        }else{
            $user_mailaddress = "未定義";
        }
        echo "メールアドレス:" . $user_mailaddress . "<br>";
        if(isset($_POST['sei'])){
            $gender_id = $_POST['sei'];
        }else{
            $gender_id = "未定義";
        }
        echo "性別　　　　　:" . $gender_id . "<br>";
        if(isset($_POST['hito'])){
            $user_one_thing = $_POST['hito'];
        }else{
            $user_one_thing = "未定義";
        }
        echo "ひとこと　　　:" . $user_one_thing . "<br>";
        $dbm = new DBManager();
        $userList = $dbm->insertUserTbl(null, $password,$username,$user_mailaddress,$dateString,$gender_id,"0",$user_one_thing,$content);
    ?>

</body>
</html>