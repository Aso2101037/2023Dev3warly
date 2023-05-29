<?php
class LoginSession{
    public function session_email_pass($pass,$email){
        session_start();
        // ハッシュ化したパスワードを引数として与えてください
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
        header("Location: home.php");
        exit();
    }
}
?>