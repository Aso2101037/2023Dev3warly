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
                <div class="title">タイトル</div>
            </div>
            <div class="image"><img src=""class="imgsize"></div>
        </div>
        <div class="right">
            <div class="icon-nickname">
                <img src="images/icon.svg"class="icon"><div class="nickname">〇〇〇〇〇</div>
            </div>

            <div class="komokumei">観光名所名</div>
            <div class="hyoji-area"></div>

            <div class="komokumei">コメント</div>
            <div class="hyoji-area-comment"></div>

            <div class="komokumei">住所</div>
            <div class="hyoji-area"></div>

            <div class="komokumei">電話番号</div>
            <div class="hyoji-area"></div>

            <div class="komokumei">営業時間</div>
            <div class="hyoji-area"></div>
        </div>
    </div>
    
    <div class="btn">
        <button class="good" type="button" ><img src="images/good.svg" class="good-img">いいね</button>
        <button class="back" type="button"onclick="history.back(-1);">＜戻る</button>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
</body>
</html>