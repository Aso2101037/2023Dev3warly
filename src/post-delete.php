<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トラスタ</title>
    <link rel="stylesheet" href="./style/post-delete.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <div class="breadcrumbs-list">
        <div class="home-div" onclick="location.href='./home.php'">Home</div><span>></span>
        <div class="delete-div">投稿削除</div>
    </div>
    <form action="" method="post">
        <div id="post-delete-list">
            <div class="delete-column" name="column-name">
                <div class="name-style" name="post-data">2023/7/14</div>
                <div class="type-style"  name="post-type">飲食店投稿</div>
                <div class="title-style"  name="post-title">初めてのマクドナルド！！</div>
                <div class="delete-button" ><span>ー</span></div>
            </div>
            <div class="delete-column" name="column-name">
                <div class="name-style" name="post-data">2023/7/14</div>
                <div class="type-style"  name="post-type">観光名所投稿</div>
                <div class="title-style"  name="post-title">初めてのバーガーキング！！</div>
                <div class="delete-button" ><span>ー</span></div>
            </div>
            <div class="delete-column" name="column-name">
                <div class="name-style" name="post-data">2023/7/14</div>
                <div class="type-style"  name="post-type">旅行プラン投稿</div>
                <div class="title-style"  name="post-title">初めてのモス！！</div>
                <div class="delete-button" ><span>ー</span></div>
            </div>
        </div>
    </form>
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