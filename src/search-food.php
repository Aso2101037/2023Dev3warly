<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/search-style.css">
    <title>飲食店検索</title>
    <!-- 作成者：梶原 -->
</head>
<body>
<?php
$login=false;
            session_start();
            if($_SESSION['email'] === null){
                header("Location: login.php");
                exit();
            }else{
                $login = true;
            }
?>
<!-- header部分↓↓ -->
<div id="app">
    <header-component @clicksearch="ModalSeach" @clickpost="ModalPost"></header-component>
        <div :class="{'is-active': isActive }" class="modal-div">
            <div class="modal-body">
                <div class="modal-plan" onclick="location.href='./search-plan.php'">
                     <p>旅行プラン検索</p>
                     <img src="./images/post-plan.svg" style="width: 5rem; height: 8rem;">
                </div>
                <div class="modal-kankou" onclick="location.href='./search-kankou.php'">
                     <p>観光名所検索</p>
                     <img src="./images/post-kankou.svg" style="width: 6rem; height: 7rem;" alt="">
                </div>
                 <div class="modal-food" onclick="location.href='./search-food.php'">
                     <p>飲食店検索</p>
                    <img src="./images/post-food.svg" style="width: 6rem; height: 7rem;" alt="">
                </div>
            </div>
        </div>
             <!-- -投稿のモーダル -->
             <div :class="{'post-active': postActive }" class="modal-div-post">
            <div class="modal-body-post">
                <div class="modal-plan-post" onclick="location.href='./plan-post.php'">
                     <p>旅行プラン投稿</p>
                     <img src="./images/post-plan.svg" style="width: 5rem; height: 8rem;">
                </div>
                <div class="modal-kankou-post" onclick="location.href='./tourist_spot_post.php'">
                     <p>観光名所投稿</p>
                     <img src="./images/post-kankou.svg" style="width: 6rem; height: 7rem;" alt="">
                </div>
                 <div class="modal-food-post" onclick="location.href='./restaurant_post.php'">
                     <p>飲食店投稿</p>
                    <img src="./images/post-food.svg" style="width: 6rem; height: 7rem;" alt="">
                </div>
            </div>
        </div>
    </div>
<div class="search">
    <input type="text" name="search-name" class="search-text" placeholder="福岡県"><button type="submit" class="search-button" onclick="location.href='./result-food.php'">検索</button>
</div>
<div class="check-container">
    <div class="check-div">
        <input type="checkbox" name="kankou" id="breakfast"><label for="breakfast" id="breakfast"  class="label-style"><span><img src="./images/breakfast.svg" alt="">朝食</span></label>
        <input type="checkbox" name="kankou" id="lunch"><label for="lunch" id="lunch"  class="label-style"><span><img src="./images/lunch.svg" alt="">昼食</span></label>
    </div>
    <div class="check-div">
        <input type="checkbox" name="kankou" id="dinner"><label for="dinner" id="dinner"  class="label-style"><span><img src="./images/dinner.svg" style="width:25px; height:25px;" alt="">夕食</span></label>
        <input type="checkbox" name="kankou" id="snack"><label for="snack" id="snack"  class="label-style"><span><img src="./images/snack.svg" alt="">軽食</span></label>
    </div>
    <div class="check-div">
        <input type="checkbox" name="kankou" id="specialty"><label for="specialty" id="specialty"  class="label-style"><span><img src="./images/specialty.svg" alt="">名物</span></label>
        <input type="checkbox" name="kankou" id="local-food"><label for="local-food" id="local-food"  class="label-style"><span><img src="./images/local-food.svg" alt="">地元飯</span></label>
    </div>
</div>
<div class="back-div">
    <button class="back-button" type="button" onclick="history.back(-1);">＜戻る</button>
</div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
    <script>
        const Login_flag = "<?php echo $login; ?>";
        var log = document.getElementById("kari");
        if(Login_flag=="1"){
                log.innerHTML="Logout";
        }else{
            log.innerHTML="LogIn";
        }
    </script>
</body>
</html>