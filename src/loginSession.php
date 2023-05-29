<?php
class LoginSession{
    public function session_email_pass($pass,$email){
        session_start();

        // セッションに変数を保存
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
    }
}
?>