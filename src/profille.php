<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トラスタ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/profille.css">
    <!-- 作成者：梶原 -->
</head>

<body>

    <?php
    $login = false;
    session_start();
    if ($_SESSION['email'] === null) {
        header("Location: login.php");
        exit();
    } else {
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
    <?php
    $email = $_SESSION['email'];
    require_once "DBmanager.php";
    $dbm = new DBManager();
    $getdata = $dbm->getUser($email);
    if ($getdata == false) {
        echo "ユーザーデータが取得できませんでした。";
    }
    ?>
    <!-- プロフィール部分 -->
    <div class="profille-container">
        <div class="center-profille">
            <div class="profille-left">
                <img src="./images/icon.svg" class="top-img" alt="トプ画" id="user_image">
                <!-- <div class="like-list"onclick="location.href='./liked-list.php'"><span>いいね一覧</span></div> -->
            </div>
            <div class="profille-right">
                <div class="titles-name">
                    <div class="nickname"><span><?php echo $getdata['user_name'] ?></span></div>
                    <div class="title-holder"><span>称号名</span></div>
                </div>
                <div class="comment-div"><span><?php echo $getdata['user_one_thing'] ?></span></div>
            </div>
        </div>
    </div>
    <!-- 旅行日記部分 -->
    <div class="trip-container">
        <div class="center-trip">
            <div class="trip-left" onclick="location.href='./profille-detail.php'">
                <img src="./images/trip-memory.svg" alt=""><span>旅行日記</span>
            </div>
            <!--
            <div class="trip-right">
                <div class="total-post"><span>総投稿数<span>～</span>件</span></div>
                <div class="place-visite"><span>訪れた場所<span>～</span>カ所</span></div>
            </div>
            -->
        </div>
    </div>
    <!-- 最近の投稿を表示する部分 -->
    <div class="new-container">
        <div class="center-post">
            <div class="new-title-delete">
                <div class="new-post"><span>最新の投稿</span></div>
                <div class="post-delete" onclick="location.href='./post-delete.php'"><span>投稿削除</span></div>
            </div>
            <div class="new-posts">
                <div class="post-card">
                    <div class="post-type">旅行プラン</div>
                    <div class="new-img"></div>
                </div>
                <div class="post-card">
                    <div class="post-type">観光名所</div>
                    <div class="new-img"></div>
                </div>
                <div class="post-card">
                    <div class="post-type">飲食店</div>
                    <div class="new-img"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="back-button">
        <button class="back" onclick="history.back(-1);">＜戻る</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
    <script src="./script/readPostDisplay.js"></script>
    <script>

        const UserImage = "<?php echo base64_encode($getdata['user_profile']) ?>";
            // console.log(UserImage);
            createUserImg(UserImage);
    </script>
        <script>
        const Login_flag = "<?php echo $login; ?>";
        var log = document.getElementById("kari");
        if(Login_flag=="1"){
                log.innerHTML="<a href='logout.php' class='href-color'>Logout</a>";
        }else{
            log.innerHTML="<a href='login.php' class='href-color'>Login</a>";
        }
    </script>
</body>

</html>