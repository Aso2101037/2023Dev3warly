<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <!-- header部分↓↓ -->
    <div id="app">
        <header-componet></header-componet>
    </div>
    <!-- 画像の部分↓↓ -->
    <div class="img-div">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBVQ91GGbQRoj3Qlv3-c-5SJrjX5UDbm_VHg&usqp=CAU" class="homeback-img" alt="">
        <img src="https://beiz.jp/images_P/fireworks/fireworks_00160.jpg" class="homeback-img" alt="">
        <img src="images/homeback.png" class="homeback-img">
    </div>
    <!-- 投稿選択の部分↓↓ -->
    <div class="post-select">
        <div class="plan-div">
            <img src="./images/post-plan.svg" alt=""><span class="post-font">旅行プランの投稿</span>
        </div>
        <div class="kankou-div">
            <img src="./images/post-kankou.svg" alt=""><span class="post-font">観光名所の投稿</span>
        </div>
        <div class="food-div">
            <img src="./images/post-food.svg" alt=""><span class="post-font">飲食店の投稿</span>
        </div>
    </div>
    <div class="modal-div">
        <div class="modal-body">
            <div class="modal-plan">
                <p>旅行プラン検索</p>
                <img src="./images/post-plan.svg" style="width: 5rem; height: 8rem;">
            </div>
            <div class="modal-kankou">
                <p>観光名所検索</p>
                <img src="./images/post-kankou.svg" style="width: 6rem; height: 7rem;" alt="">
            </div>
            <div class="modal-food">
                <p>飲食店検索</p>
                <img src="./images/post-food.svg" style="width: 6rem; height: 7rem;" alt="">
            </div>
        </div>
    </div>
    <!-- 旅行プランのカード↓↓ -->
    <div id="card">
        <h1 class="favorite-font">人気の旅行プラン</h1>
        <card-component></card-component>
        <h1 class="favorite-font">人気の観光名所</h1>
        <card-component></card-component>
        <h1 class="favorite-font">人気の飲食店</h1>
        <card-component></card-component>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
    <script src="./script/card.js"></script>
</body>
</html>