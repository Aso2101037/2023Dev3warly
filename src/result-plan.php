<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>旅行プラン検索結果画面</title>
</head>
<!-- 作成者：梶原 -->
<body>
    <div id="app">
        <header-component @clicksearch="ModalSeach"></header-component>
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
    </div>
    <div id="card">
    <card-component></card-component>
    <card-component></card-component>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
    <script src="./script/card.js"></script>
</body>

</html>