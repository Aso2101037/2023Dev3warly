<?php
require_once "./DBmanager.php";
$db = new DBManager;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トラスタ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/detail_tourist_spot-style.css">
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
<nav>
    <ol class="breadcrumb">
        <li class="list"><a href="home.php">Home</a></li>>
        <li class="list"><a href="pop_tourist_spot.php"class="pop">人気の観光名所</a></li>>
        <li class="list">観光名所名</a></li>
    </ol>
</nav>

    <div class="flex">
        <div class="left">
            <div class="title-img">
                <div class="dtitle" id="title">タイトル</div>
            </div>
            <div class="image"><img src=""class="imgsize" id=<?php echo $_POST['CardId']?>></div>
        </div>
        <div class="right">
            <div class="icon-nickname">
                <img src="images/icon.svg"class="icon"><div class="nickname">〇〇〇〇〇</div>
            </div>

            <div class="komokumei">観光名所名</div>
            <div class="hyoji-area" id="name"></div>

            <div class="komokumei">コメント</div>
            <div class="hyoji-area-comment" id="comment"></div>

            <div class="komokumei">住所</div>
            <div class="hyoji-area" id="address"></div>


            <div class="komokumei">営業時間</div>
            <div class="hyoji-area" ><span id="first-time"></span>~<span id="last-time"></span></div>
        </div>
    </div>
    
    <div class="btn">
        <!-- <button class="good" type="button" ><img src="images/good.svg" class="good-img">いいね</button> -->
        <button class="back" type="button"onclick="history.back(-1);">＜戻る</button>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
    <script>
        const CardDetail = <?php echo $db->getTouristCardId($_POST['CardId']); ?>;
        const ImgDetail = <?php echo $db->getTouristImg($_POST['CardId']); ?>;
        const title =document.getElementById("title");
        const Imgid =document.getElementById(<?php echo $_POST['CardId']?>);
        const name =document.getElementById("name");
        const comment =document.getElementById("comment");
        const address =document.getElementById("address");
        const first =document.getElementById("first-time");
        const last =document.getElementById("last-time");
        console.log(); 
        // tourist_spot_name,tourist_spot_address,tourist_spot_start,tourist_spot_end,
        // tourist_spot_title,tourist_spot_comment,category_id,plan_spot_day,tourist_release
        title.innerHTML =CardDetail.tourist_spot_title;
        Imgid.src = "data:image/jpg;base64," + ImgDetail;
        name.innerHTML = CardDetail.tourist_spot_name;
        comment.innerHTML = CardDetail.tourist_spot_comment;
        address.innerHTML =CardDetail.tourist_spot_address;
        first.innerHTML =CardDetail.tourist_spot_start;
        last.innerHTML =CardDetail.tourist_spot_end;


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