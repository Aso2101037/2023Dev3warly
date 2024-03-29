<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class DBManager
{
    //接続のメソッド(xampp)
    private function dbConnect()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=torasuta;charset=utf8', 'root', 'root');
        return $pdo;
    }
    //接続のメソッド（lolipop）
    //private function dbConnect(){
    //    $pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1417815-hosapo;charset=utf8','LAA1417815','Pass0411');
    //    return $pdo;     
    //}
    private function session_email_pass($email, $pass)
    {
        session_start();
        $_SESSION['email'] = $email; // メールアドレスの保存（ハッシュ化されたパスワードの保存は不要）
        
        $pdo = $this->dbConnect();
        $sql = "SELECT user_id,user_name FROM user WHERE user_mailaddress = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $email, PDO::PARAM_STR);
        $ps->execute();
    
        $result = $ps->fetch(PDO::FETCH_ASSOC); // 結果を連想配列として取得
    
        if ($result['user_id'] != null) {
            $_SESSION['user_id'] = $result['user_id']; // ユーザーIDをセッションに保存
        } else {
            header("Location: user-signup.php");
            exit(); // 必ずexit()を呼び出して処理を終了させる
        }
        $_SESSION['user_name'] = $result['user_name'];
    
        header("Location: home.php");
        exit();
    }
    

    //新規追加(ユーザー)
    public function insertUserTbl($user_id, $password, $user_name, $user_mailaddress, $user_age, $gender_id, $user_title_id, $user_one_thing, $user_profile)
    {
        //パスワードハッシュ化
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO user(user_id,password,user_name,user_mailaddress,user_age,gender_id,user_title_id,user_one_thing,user_profile)VALUES(?,?,?,?,?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $user_id, PDO::PARAM_STR);
        $ps->bindValue(2, $hash_pass, PDO::PARAM_STR);
        $ps->bindValue(3, $user_name, PDO::PARAM_STR);
        $ps->bindValue(4, $user_mailaddress, PDO::PARAM_STR);
        $ps->bindValue(5, $user_age, PDO::PARAM_STR);
        $ps->bindValue(6, $gender_id, PDO::PARAM_STR);
        $ps->bindValue(7, $user_title_id, PDO::PARAM_STR);
        $ps->bindValue(8, $user_one_thing, PDO::PARAM_STR);
        $ps->bindValue(9, $user_profile, PDO::PARAM_STR);
        $ps->execute();
    }

    //ユーザー検索
    public function serchUser($user_logid, $user_logpassword)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE user_mailaddress = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $user_logid, PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps->fetch();
        if ($searchArray['user_mailaddress'] === $user_logid) {
            if (password_verify(
                (string)$user_logpassword,
                (string)$searchArray['password'],
            )) {
                // パスワードが一致する場合の処理
                echo "ログイン完了";
                $this->session_email_pass($user_logid, $searchArray['password']);
            } else {
                // パスワードが一致しない場合の処理
                echo "パスワードが違います";
                echo $user_logpassword;
                echo "<br>";
                echo $searchArray['password'];
            }
        } else {
            echo "ユーザー名が違います";
        }
    }
    //userを名前で取得するメソッド
    public function getUserTblByword($username)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE user_name LIKE ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, "%" . $username . "%", PDO::PARAM_STR);

        $ps->execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }
    public function getUser($email)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE user_mailaddress = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $email, PDO::PARAM_STR);
        $ps->execute();
        $getdata = $ps->fetch();
        return $getdata;
    }

    //観光名所新規追加のメソッド
    public function tourist_spot($tourist_spot_name, $tourist_spot_address, $tourist_spot_image, $tourist_spot_start, $tourist_spot_end, $tourist_spot_title, $tourist_spot_comment, $category_id, $tourist_release)
    {
        $tourist_spot_day = date("YmdHis");
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO tourist_spot(tourist_spot_name,tourist_spot_address,tourist_spot_image,tourist_spot_start,tourist_spot_end,tourist_spot_title,tourist_spot_comment,category_id,plan_spot_day,tourist_release)VALUES(?,?,?,?,?,?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $tourist_spot_name, PDO::PARAM_STR);
        $ps->bindValue(2, $tourist_spot_address, PDO::PARAM_STR);
        $ps->bindValue(3, $tourist_spot_image, PDO::PARAM_STR);
        $ps->bindValue(4, $tourist_spot_start, PDO::PARAM_STR);
        $ps->bindValue(5, $tourist_spot_end, PDO::PARAM_STR);
        $ps->bindValue(6, $tourist_spot_title, PDO::PARAM_STR);
        $ps->bindValue(7, $tourist_spot_comment, PDO::PARAM_STR);
        $ps->bindValue(8, $category_id, PDO::PARAM_STR);
        $ps->bindValue(9, $tourist_spot_day, PDO::PARAM_STR);
        $ps->bindValue(10, $tourist_release, PDO::PARAM_INT);
        $ps->execute();
        //ここからpostテーブルへの追加
        $sql = "SELECT * FROM tourist_spot WHERE tourist_spot_comment = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $tourist_spot_comment, PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps->fetchAll();
        $tourist_spot_id = $searchArray[0]['tourist_spot_id'];
        if (!isset($_SESSION)) {
            session_start();
        }
        $user_id = $_SESSION['user_id'];
        $sql = "INSERT INTO post(posts_id,user_id,plan_post_id,tourist_spot_id,restaurant_post_id,prefecture_id,regions_id)VALUES(?,?,?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, 0, PDO::PARAM_STR);
        $ps->bindValue(2, $user_id, PDO::PARAM_STR);
        $ps->bindValue(3, 0, PDO::PARAM_STR);
        $ps->bindValue(4, 0, PDO::PARAM_STR);
        $ps->bindValue(5, $tourist_spot_id, PDO::PARAM_STR);
        $ps->bindValue(6, 0, PDO::PARAM_STR);
        $ps->bindValue(7, 0, PDO::PARAM_STR);
        $ps->execute();
    }
    //飲食店投稿新規追加のメソッド
    public function restaurant_post($restaurant_title, $restaurant_image, $restaurant_name, $restaurant_comment, $restaurant_address, $restaurant_start_time, $restaurant_finish_time, $restaurant_budget, $restaurant_category_id, $restaurant_date, $restaurant_release)
    {
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO restaurant_post(restaurant_post_id,restaurant_title,restaurant_image,restaurant_name,restaurant_comment,restaurant_address,restaurant_start_time,restaurant_finish_time,restaurant_budget,restaurant_category_id,restaurant_date,restaurant_release)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $restaurant_date = date("YmdHis");
        $ps->bindValue(1, 0, PDO::PARAM_STR);
        $ps->bindValue(2, $restaurant_title, PDO::PARAM_STR);
        $ps->bindValue(3, $restaurant_image, PDO::PARAM_STR);
        $ps->bindValue(4, $restaurant_name, PDO::PARAM_STR);
        $ps->bindValue(5, $restaurant_comment, PDO::PARAM_STR);
        $ps->bindValue(6, $restaurant_address, PDO::PARAM_STR);
        $ps->bindValue(7, $restaurant_start_time, PDO::PARAM_STR);
        $ps->bindValue(8, $restaurant_finish_time, PDO::PARAM_STR);
        $ps->bindValue(9, $restaurant_budget, PDO::PARAM_STR);
        $ps->bindValue(10, $restaurant_category_id, PDO::PARAM_STR);
        $ps->bindValue(11, $restaurant_date, PDO::PARAM_STR);
        $ps->bindValue(12, $restaurant_release, PDO::PARAM_STR);
        $ps->execute();
        //ここからpostテーブルへの追加
        $sql = "SELECT * FROM restaurant_post WHERE restaurant_comment = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $restaurant_comment, PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps->fetchAll();
        $restaurant_post_id = $searchArray[0]['restaurant_post_id'];
        if (!isset($_SESSION)) {
            session_start();
        }
        $user_id = $_SESSION['user_id'];
        $sql = "INSERT INTO post(posts_id,user_id,plan_post_id,tourist_spot_id,restaurant_post_id,prefecture_id,regions_id)VALUES(?,?,?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, 0, PDO::PARAM_STR);
        $ps->bindValue(2, $user_id, PDO::PARAM_STR);
        $ps->bindValue(3, 0, PDO::PARAM_STR);
        $ps->bindValue(4, $restaurant_post_id, PDO::PARAM_STR);
        $ps->bindValue(5, 0, PDO::PARAM_STR);
        $ps->bindValue(6, 0, PDO::PARAM_STR);
        $ps->bindValue(7, 0, PDO::PARAM_STR);
        $ps->execute();
    }
    public function plan_post($plan_title, $release, $plan_day)
    //plan_postテーブルへの追加（１投稿につき１つの追加）
    {
        $pdo = $this->dbConnect();
        session_start();
        $user_id = $_SESSION['user_id'];
        $plan_day = date("YmdHis");

        // plan_postテーブルへの追加
        $sql = "INSERT INTO plan_post(user_id, plan_title, `release`, plan_day) VALUES (?, ?, ?, ?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $user_id, PDO::PARAM_STR);
        $ps->bindValue(2, $plan_title, PDO::PARAM_STR);
        $ps->bindValue(3, $release, PDO::PARAM_STR);
        $ps->bindValue(4, $plan_day, PDO::PARAM_STR);
        $ps->execute();

        // 直前のINSERT文で生成されたplan_post_idを取得
        $plan_post_id = $pdo->lastInsertId();
        $_SESSION['plan_post_id'] = $plan_post_id;
    }
    public function insert_post_plan($prefecture_id){
        $sql = "INSERT INTO post(posts_id, user_id, plan_post_id, tourist_spot_id, restaurant_post_id, prefecture_id, regions_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $pdo = $this->dbConnect();
        $ps = $pdo->prepare($sql);
        session_start();
        $user_id = $_SESSION['user_id'];
        $plan_post_id = $_SESSION['plan_post_id'];
        $ps->bindValue(1, 0, PDO::PARAM_STR);
        $ps->bindValue(2, $user_id, PDO::PARAM_STR);
        $ps->bindValue(3, $plan_post_id, PDO::PARAM_STR);
        $ps->bindValue(4, 0, PDO::PARAM_STR);
        $ps->bindValue(5, 0, PDO::PARAM_STR);
        $ps->bindValue(6, $prefecture_id, PDO::PARAM_STR);
        $ps->bindValue(7, 0, PDO::PARAM_STR);
        $ps->execute();
    }
    public function plan_post_detail($plan_spot_name, $plan_spot_start_time, $plan_spot_finish_time, $plan_spot_public_transport, $plan_spot_travel_time, $plan_spot_comment, $plan_spot_image){
                // plan_post_detailテーブルへの追加
                $sql = "INSERT INTO plan_post_detail(plan_post_id, plan_post_detail_id, user_id, plan_spot_name, plan_spot_start_time, plan_spot_finish_time, plan_spot_address, plan_spot_public_transport, plan_spot_travel_time, plan_spot_comment, plan_spot_image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $pdo = $this->dbConnect();
                $ps = $pdo->prepare($sql);
                session_start();
                $user_id = $_SESSION['user_id'];
                $plan_post_id = $_SESSION['plan_post_id'];
                $plan_spot_address = 1;
                $ps->bindValue(1, $plan_post_id, PDO::PARAM_STR);
                $ps->bindValue(2, 0, PDO::PARAM_STR);
                $ps->bindValue(3, $user_id, PDO::PARAM_STR);
                $ps->bindValue(4, $plan_spot_name, PDO::PARAM_STR);
                $ps->bindValue(5, $plan_spot_start_time, PDO::PARAM_STR);
                $ps->bindValue(6, $plan_spot_finish_time, PDO::PARAM_STR);
                $ps->bindValue(7, $plan_spot_address, PDO::PARAM_STR);
                $ps->bindValue(8, $plan_spot_public_transport, PDO::PARAM_STR);
                $ps->bindValue(9, $plan_spot_travel_time, PDO::PARAM_STR);
                $ps->bindValue(10, $plan_spot_comment, PDO::PARAM_STR);
                $ps->bindValue(11, $plan_spot_image, PDO::PARAM_STR);
                $ps->execute();
    }

    //ボタンを押下してデータベース内の投稿削除する
    public function deletePostTbl($getid)
    {
        $pdo = $this->dbConnect();
        // 削除対象のIDを取得
        $id = $_POST['id'];

        // データを削除するクエリを実行
        $sql = "DELETE FROM post WHERE posts_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->execute()) {
            // 削除成功時の処理
            echo "<script>alert('削除が成功しました。');</script>";
        } else {
            // 削除失敗時の処理
            echo "<script>alert('削除に失敗しました。');</script>";
        }
    }

    //ボタンを押下してデータベース内の詳細投稿削除する
    public function deletePlanPostDtlTbl($getid)
    {
        $pdo = $this->dbConnect();
        // 削除対象のIDを取得
        $id = $_POST['id'];

        // データを削除するクエリを実行
        $sql = "DELETE FROM plan_post_detail WHERE plan_post_detail_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            // 削除成功時の処理
            echo "<script>alert('削除が成功しました。');</script>";
        } else {
            // 削除失敗時の処理
            echo "<script>alert('削除に失敗しました。');</script>";
        }
    }

    //ボタンを押下してデータベース内の観光名所削除する
    public function deleteToristSpotTbl($getid)
    {
        $pdo = $this->dbConnect();
        // 削除対象のIDを取得
        $id = $_POST['torist_spot_id'];

        // データを削除するクエリを実行
        $sql = "DELETE FROM tourist_spot WHERE tourist_spot_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->execute()) {
            // 削除成功時の処理
            echo "<script>alert('削除が成功しました。');</script>";
        } else {
            // 削除失敗時の処理
            echo "<script>alert('削除に失敗しました。');</script>";
        }
    }
    // 旅行プランの件数を取得
    public function getPlanCnt(){
        $pdo = $this->dbConnect()->prepare("SELECT COUNT(*) AS total FROM plan_post");
        $pdo->execute();
        $count = $pdo->fetch(PDO::FETCH_ASSOC);
        return $count['total'];
    }
    // 飲食店の件数を取得
    public function getRestranCnt(){
        $pdo = $this->dbConnect()->prepare("SELECT COUNT(*) AS total FROM restaurant_post");
        $pdo->execute();
        $count = $pdo->fetch(PDO::FETCH_ASSOC);
        return $count['total'];
    }
    // 観光名所の件数を取得
    public function getTouristCnt(){
        $pdo = $this->dbConnect()->prepare("SELECT COUNT(*) AS total FROM tourist_spot");
        $pdo->execute();
        $count = $pdo->fetch(PDO::FETCH_ASSOC);
        return $count['total'];
    }
    // 飲食店の画像を取得
    public function getAllRestranImg(){
        $pdo = $this->dbConnect()->prepare("SELECT restaurant_post_id , restaurant_image FROM restaurant_post ORDER BY restaurant_post_id DESC");
        $pdo->execute();
    
        $images = array();
        while($row = $pdo->fetch(PDO::FETCH_ASSOC)){
            // 画像データをbase64エンコードして配列に追加
            // $images[$row['restaurant_post_id']][] = base64_encode($row['restaurant_image']);
            array_push($images, [
                "id" => $row['restaurant_post_id'],
                "img" => base64_encode($row['restaurant_image'])
            ]);
        }
        // 配列をJSON形式にエンコードして返す
        return json_encode($images);
    }
    // 旅行プランの画像を取得する
    public function getPlanImg(){
        $pdo = $this->dbConnect()->prepare("SELECT plan_post_id,plan_spot_image FROM `plan_post_detail` GROUP BY plan_post_id ORDER BY plan_post_id DESC");
        $pdo->execute();

        $plan_images = array();
        while($row = $pdo->fetch(PDO::FETCH_ASSOC)){
            array_push($plan_images,[
                "id" => $row['plan_post_id'],
                "img"=>base64_encode($row['plan_spot_image'])
            ]);
        }
        return json_encode($plan_images);
    }
// 観光名所投稿から画像を取得する
    public function getAllTouristImg(){
        $pdo = $this->dbConnect()->prepare("SELECT tourist_spot_id , tourist_spot_image FROM tourist_spot ORDER BY tourist_spot_id DESC");
        $pdo->execute();

        $tourist_images = array();
        while($row = $pdo->fetch(PDO::FETCH_ASSOC)){
            array_push($tourist_images,[
                "id" => $row['tourist_spot_id'],
                "img"=>base64_encode($row['tourist_spot_image'])
            ]);
        }
        return json_encode($tourist_images);
    }
    // 旅行プランIDとタイトルを取得
    public function getAllPlanData(){
        $pdo = $this->dbConnect()->prepare("SELECT plan_post_id,plan_title FROM `plan_post` ORDER BY plan_post_id DESC");
        $pdo->execute();
        $data = $pdo->fetchAll();
       return  json_encode($data);
    }
// 飲食店の画像以外のデータを取得
    public function getAllRestranData(){
        $pdo = $this->dbConnect()->prepare("SELECT restaurant_post_id,restaurant_title,restaurant_name, restaurant_comment, restaurant_address, restaurant_start_time, restaurant_finish_time, restaurant_budget, restaurant_category_id, restaurant_date, restaurant_release FROM restaurant_post ORDER BY restaurant_post_id DESC");
        $pdo->execute();
        $data = $pdo->fetchAll();
       return  json_encode($data);
    }
// 観光名所の画像以外のデータを取得
    public function getAllTouristData(){
        $pdo = $this->dbConnect()->prepare("SELECT tourist_spot_id, tourist_spot_name,tourist_spot_address,tourist_spot_start,tourist_spot_end,tourist_spot_title,tourist_spot_comment,category_id,plan_spot_day,tourist_release FROM tourist_spot ORDER BY tourist_spot_id DESC");
        $pdo->execute();
        $Touristdata = $pdo->fetchAll();
        return json_encode($Touristdata);
    }
    // 飲食店の詳細画面に情報を送る
    public function getCardId($CardId){
        $pdo = $this->dbConnect()->prepare("SELECT restaurant_post_id,restaurant_title,restaurant_name, restaurant_comment, restaurant_address, restaurant_start_time, restaurant_finish_time, restaurant_budget, restaurant_category_id, restaurant_date, restaurant_release FROM restaurant_post WHERE restaurant_post_id = $CardId ");
        $pdo->execute();
        $data = $pdo->fetch();
        return json_encode($data);
    }
    public function getRestranImg($CardId){
        $pdo = $this->dbConnect()->prepare("SELECT  restaurant_image FROM restaurant_post WHERE restaurant_post_id = $CardId ");
        $pdo->execute();
        $row = $pdo->fetch();
        $images = base64_encode($row['restaurant_image']);
        // 配列をJSON形式にエンコードして返す
        return json_encode($images);
    }
    // 観光名所の詳細画面に情報を送る
    public function getTouristCardId($CardId){
        $pdo = $this->dbConnect()->prepare("SELECT tourist_spot_id, tourist_spot_name,tourist_spot_address,tourist_spot_start,tourist_spot_end,tourist_spot_title,tourist_spot_comment,category_id,plan_spot_day,tourist_release FROM tourist_spot WHERE tourist_spot_id = $CardId");
        $pdo->execute();
        $data = $pdo->fetch();
        return json_encode($data);
    }
    public function getTouristImg($CardId){
        $pdo = $this->dbConnect()->prepare("SELECT  tourist_spot_image FROM tourist_spot WHERE tourist_spot_id = $CardId");
        $pdo->execute();
        $row = $pdo->fetch();
        $images = base64_encode($row['tourist_spot_image']);
        // 配列をJSON形式にエンコードして返す
        return json_encode($images);
    }
}

