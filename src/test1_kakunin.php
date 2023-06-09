<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録確認画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/newkakunin.css">
</head>
<body>
    <header>

    </header>


<div class="new-naiyo">
    <?php
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
            echo "差分: {$yearDiff}歳";
            // 受け取った値を画面に出力
            
         };
        require_once "DBmanager.php";
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }else{
            $password = "未定義";
        }
        echo "ユーザー名　　:" . $password . "<br>";
        if(isset($_POST['name'])){
            $username = $_POST['name'];
        }else{
            $username = "未定義";
        }
        echo "パスワード　　:" . $username . "<br>";
        if(isset($_POST['e-mailaddress'])){
            $user_mailaddress = $_POST['e-mailaddress'];
        }else{
            $user_mailaddress = "未定義";
        }
        echo "メールアドレス:" . $user_mailaddress . "<br>";
        if(isset($_POST['gender'])){
            $gender_id = $_POST['gender'];
        }else{
            $gender_id = "未定義";
        }
        echo "性別　　　　　:" . $gender_id . "<br>";
        if(isset($_POST['tl'])){
            $user_one_thing = $_POST['tl'];
        }else{
            $user_one_thing = "未定義";
        }
        echo "ひとこと　　　:" . $user_one_thing . "<br>";
        $dbm = new DBManager();
        $userList = $dbm->insertUserTbl(null, $password,$username,$user_mailaddress,$yearDiff,$gender_id,null,$user_one_thing,null);



    ?>
</div>
            <div class="button_solid019" onclick="location.href='./test.php'" >
                <a href="#">戻る</a>
            </div>
            <div class="button_solid020" onclick="location.href='./user_toroku_comp.html'">
                <a href="#">登録</a>
            </div>

</body>
</html>