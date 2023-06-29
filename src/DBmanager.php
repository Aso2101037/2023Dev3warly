<?php
class DBManager{
     //接続のメソッド(xampp)
     private function dbConnect(){
         $pdo = new PDO('mysql:host=localhost;dbname=torasuta;charset=utf8','root','root');
         return $pdo;     
    }
    //接続のメソッド（lolipop）
    //private function dbConnect(){
    //    $pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1417815-hosapo;charset=utf8','LAA1417815','Pass0411');
    //    return $pdo;     
    //}
    private function session_email_pass($email,$pass){
        session_start();
        // ハッシュ化したパスワードを引数として与えてください
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
        header("Location: home.php");
        exit();
    }
    

    // public function getUserTblByword($pass,$email){
    //     $pdo = $this->dbConnect();
    //     $sql = "UPDATE hosapo_user_tbl SET password=? WHERE email_address= ?";
    //     $ps = $pdo->prepare($sql);
    //     $ps->bindValue(1,$pass,PDO::PARAM_STR);
    //     $ps->bindValue(2,"%".$email."%",PDO::PARAM_STR);
    //     $ps->execute();
    //     $searchArray = $ps->fetchAll();
    //     return $searchArray;
    // }

    // //新規追加(ユーザー)
    // public function insertUserTbl($user_id,$password,$user_name,$user_mailaddress,$user_age,$gender_id,$user_title_id,$user_one_thing,$user_profile){
    //     //パスワードハッシュ化
    //     $hash_pass = password_hash($password, PASSWORD_DEFAULT);
    //     $pdo = $this->dbConnect();
    //     $sql = "INSERT INTO user(user_id,password,user_name,user_mailaddress,user_age,gender_id,user_title_id,user_one_thing,user_profile)VALUES(?,?,?,?,?,?,?,?,?)";
    //     $ps = $pdo->prepare($sql);
    //     $ps->bindValue(1,$user_id,PDO::PARAM_STR);
    //     $ps->bindValue(2,$hash_pass,PDO::PARAM_STR);
    //     $ps->bindValue(3,$user_name,PDO::PARAM_STR);
    //     $ps->bindValue(4,$user_mailaddress,PDO::PARAM_STR);
    //     $ps->bindValue(5,$user_age,PDO::PARAM_STR);
    //     $ps->bindValue(6,$gender_id,PDO::PARAM_STR);
    //     $ps->bindValue(7,$user_title_id,PDO::PARAM_STR);  
    //     $ps->bindValue(8,$user_one_thing,PDO::PARAM_STR);   
    //     $ps->bindValue(9,$user_profile,PDO::PARAM_STR);  
    //     $ps->execute();
    // }

        //新規追加(ユーザー)
    public function insertUserTbl($user_id,$password,$user_name,$user_mailaddress,$user_age,$gender_id,$user_title_id,$user_one_thing,$user_profile){
        //パスワードハッシュ化
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO user(user_id,password,user_name,user_mailaddress,user_age,gender_id,user_title_id,user_one_thing,user_profile)VALUES(?,?,?,?,?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$user_id,PDO::PARAM_STR);
        $ps->bindValue(2,$hash_pass,PDO::PARAM_STR);
        $ps->bindValue(3,$user_name,PDO::PARAM_STR);
        $ps->bindValue(4,$user_mailaddress,PDO::PARAM_STR);
        $ps->bindValue(5,$user_age,PDO::PARAM_STR);
        $ps->bindValue(6,$gender_id,PDO::PARAM_STR);
        $ps->bindValue(7,$user_title_id,PDO::PARAM_STR);  
        $ps->bindValue(8,$user_one_thing,PDO::PARAM_STR);   
        $ps->bindValue(9,$user_profile,PDO::PARAM_STR);  
        $ps->execute();
    }

    //ユーザー検索
    public function serchUser($user_logid,$user_logpassword){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE user_mailaddress = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$user_logid,PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps->fetch();
        if($searchArray['user_mailaddress'] === $user_logid){
            if (password_verify((string)$user_logpassword,(string)$searchArray['password'], 
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
        }else{
            echo "ユーザー名が違います";
        }
        
    }

    //新規追加(予約{appointment})
    public function insertApptbl($name,$hospitalid,$specialty,$date,$time){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO hosapo_appointment_tbl(user_name,hospital_id,medical_specialty,appointment_data,appointment_time)VALUES(?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$name,PDO::PARAM_STR);
        $ps->bindValue(2,$hospitalid,PDO::PARAM_STR);
        $ps->bindValue(3,$specialty,PDO::PARAM_STR);
        $ps->bindValue(4,$date,PDO::PARAM_STR);
        $ps->bindValue(5,$time,PDO::PARAM_STR);
        $ps->execute();
    }

    //userを名前で取得するメソッド
    public function getUserTblByword($username){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE user_name LIKE ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,"%".$username."%",PDO::PARAM_STR);

        $ps->execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }
    public function getUser($email) {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE user_mailaddress = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $email, PDO::PARAM_STR);
        $ps->execute();
        $getdata = $ps->fetch();
        return $getdata;
    }

    //hosapo_hospital_tblをidで取得するメソッド
    public function getHospitalTblByid($hospitalid){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_id LIKE ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,"%".$hospitalid."%",PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }

    //user_idを受診者名で取得するメソッド
    public function getUserTblByname($user_name){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM hosapo_user_tbl WHERE full_name LIKE ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,"%".$user_name."%",PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }

    //パスワード再設定するメソッド
    public function changeUserTblByword($email,$pass){
        $pdo = $this->dbConnect();
        $sql = "UPDATE hosapo_user_tbl SET password=:password , email_address = :email_address WHERE  email_address = :email_address";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$email,PDO::PARAM_STR);
        $ps->execute(array(':password' => $pass, ':email_address' => $email));
    }
    //あむの画面
    public function getcomment($hospital_introduction){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_introduction LIKE ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, "%" . $hospital_introduction . "%", PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
        }
        
        //あむの画面
        public function getUserTblByIdAndPass($hospital_id){
            $pdo = $this->dbConnect();
            $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_id = ? ";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1, $hospital_id, PDO::PARAM_INT);
            $ps->execute();
            $searchArray = $ps->fetchAll();
            return $searchArray;
            
        }

    /*新規追加(予約状況)
    public function insertapp($){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO hosapo_appointment_tbl(appointment_id,user_id,hospial_id,medical_sprciality,appointment_data,appointment_time)VALUES(?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$,PDO::PARAM_INT);
        $ps->bindValue(2,$,PDO::PARAM_STR);
        $ps->bindValue(3,$,PDO::PARAM_STR);
        $ps->bindValue(4,$,PDO::PARAM_STR);
        $ps->bindValue(5,$,PDO::PARAM_STR);

        $ps->execute();
        
    }*/

        //新規追加(予約)
    /*public function insertappintmentTbl($id,$pass,$username,$usermail,$address){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO hosapo_user_tbl(user_id,hospital_id,japan_name,medical_specialty,appointment_data,appointment_time)VALUES(?,?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$pass,PDO::PARAM_STR);
        $ps->bindValue(2,$name,PDO::PARAM_STR);
        $ps->bindValue(3,$namek,PDO::PARAM_STR);
        $ps->bindValue(4,$address,PDO::PARAM_STR);
        $ps->bindValue(5,$telephone_number,PDO::PARAM_STR);
        $ps->bindValue(6,$birthday,PDO::PARAM_STR);
        $ps->bindValue(7,$gender,PDO::PARAM_STR);
        $ps->bindValue(8,$email_address,PDO::PARAM_STR);       
        
        $ps->execute();
        
    }*/


       // hosapo_hospital_tblを名前で取得するメソッド
    //     public function getUserTblByid(){
    //     $pdo = $this->dbConnect();
    //     $sql = "SELECT * FROM hosapo_hospital_tbl ";
    //     $ps = $pdo->prepare($sql);
    //     $ps->execute();
    //     $searchArray = $ps->fetchAll();
    //     return $searchArray;
    // }


    ///できてるか確認
    //できた

    //ボタンを押下してデータベース内の投稿削除する
public function deletePostTbl($getid){
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
public function deletePlanPostDtlTbl($getid){
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
}
?>

