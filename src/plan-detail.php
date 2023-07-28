<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トラスタ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/plan-detail.css">
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
    <!-- ヘッダーから下の部分 -->
    <div class="plan-container">
        <div class="center-flex">
            <div class="flex-left">
                <div class="plan-title"><span>タイトル</span></div>
                <div class="traffic-list">
                    <div class="destination">
                        <div class="destination-name"><span>行先1</span></div>
                        <div class="destination-time"><span>時間</span></div>
                    </div>
                    <div class="destination">
                        <div class="destination-name"><span>行先2</span></div>
                        <div class="destination-time"><span>時間</span></div>
                    </div>
                    <div class="destination">
                        <div class="destination-name"><span>行先3</span></div>
                        <div class="destination-time"><span>時間</span></div>
                    </div>
                    <div class="destination">
                        <div class="destination-name"><span>行先4</span></div>
                        <div class="destination-time"><span>時間</span></div>
                    </div>
                </div>
            </div>
            <div class="flex-right">
                <div class="destination-img"><img src="./images/homeback.png" alt="行先の画像を表示する"></div>
                <div class="display-div">
                    <p>滞在時間</p>
                    <div class="visited-time"></div>
                </div>
                <div class="display-div">
                    <p>住所</p>
                    <div class="access"></div>
                </div>
                <div class="display-div">
                    <p>アクセス</p>
                    <div class="transportation"></div>
                </div>
                <div class="display-div">
                    <p>コメント</p>
                    <div class="comment"></div>
                </div>
                <div class="button-list">
                    <button class="liked-button">いいね</button>
                    <button class="back-button" onclick="history.back(-1);">＜戻る</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
    <script>
        const Login_flag = "<?php echo $login; ?>";
        var log = document.getElementById("kari");
        if(Login_flag=="1"){
                log.innerHTML="<a href='logout.php'>Logout</a>";
        }else{
            log.innerHTML="<a href='login.php'>Login</a>";
        }
    </script>
</body>

</html>