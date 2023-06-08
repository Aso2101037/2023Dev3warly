<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/search-style.css">
    <title>観光名所検索</title>
    <!-- 作成者：梶原 -->
</head>
<body>
<div id="app">
        <header-component @clicksearch="ModalSeach"></header-component>
        <div :class="{'is-active': isActive }" class="modal-div">
            <div class="modal-body">
                <div class="modal-plan" onclick="location.href='./search-plan.php'">
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
</div>
<div class="search">
    <input type="text" name="search-name" class="search-text" placeholder="福岡県"><button type="submit" class="search-button">検索</button>
</div>
<div class="check-container">
    <div class="check-div">
    <label for="" class="label-style"><input type="checkbox" name="都市" id="1"><span><img src="./images/search.svg" alt="">都市</span></label>
    <label for=""class="label-style"><input type="checkbox" name="温泉" id="2"><span><img src="./images/search.svg" alt="">温泉</span></label>
    <label for=""class="label-style"><input type="checkbox" name="映え" id="3"><span><img src="./images/search.svg" alt="">映え</span></label>
        <input type="checkbox" name="神社・寺" id="4"><label for=""class="label-style"><span><img src="./images/search.svg" alt=""></span>神社・寺</label>
        <input type="checkbox" name="自然風景" id="5"><label for=""class="label-style"><span><img src="./images/search.svg" alt=""></span>自然風景</label>
        <input type="checkbox" name="ぶらり" id="6"><label for=""class="label-style"><span><img src="./images/search.svg" alt=""></span>ぶらり</label>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
</body>
</html>