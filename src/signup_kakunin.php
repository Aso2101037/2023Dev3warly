<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try{
        $opt = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
                                PDO::ATTR_EMULATE_PREPARES => false);

        $db = new PDO("mysql:host=localhost;dbname=torasuta;charset=utf8",
                                    "root", "root", $opt);

    //画像がアップロードされたか確認
    if (!empty($_FILES['imagedata']['name'])) {
        
        //SQLを生成　テーブル名：Imagetbl　カラム名：id, image
        $sql = "INSERT INTO user(user_profile) VALUES (?)";
        $ps = $db->prepare($sql);

        //POSTで受け取った画像をバイナリデータにする
        $image = file_get_contents($_FILES['imagedata']['tmp_name']);


        //画像をバイナリデータとしてバインド
        $ps->bindValue(1, $image, PDO::PARAM_LOB);

        //SQLを実行
        $ps->execute();

        echo "画像のアップロードが完了しました。";
    }
}catch(PDOException $e){
    echo "Error : " . $e->getMessage() . "\n";
}

    $date = date("y-m-d");
        
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

        $userList = $dbm->insertUserTbl(null, $password,$username,$user_mailaddress,$dateString,$gender_id,"0",$user_one_thing,$image);
        //DBに接続
        try{
            $opt = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                     PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
                                     PDO::ATTR_EMULATE_PREPARES => false);                         
        
            //Imagetblから画像を取得
            $sql = "SELECT * FROM user";
            $ps = $db->prepare($sql);
            $ps->execute();
        
            //画像をimgタグに表示
            while($row = $ps->fetch()){
                echo "<img src='data:image/jpeg;base64," . base64_encode($row['user_profile']) . "' />";
            }     
        }catch(PDOException $e){
            echo "Error : " . $e->getMessage() . "\n";
        }
        
    ?>
    <!--画像 -->
    <div class="icon-image">
        <img src="data:<?php echo $image['image_type'] ?>;base64,<?php echo $img; ?>">
    </div>

</body>
</html>