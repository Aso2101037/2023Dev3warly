<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トラスタ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./style/profille.css">
    <!-- 作成者：梶原 -->
</head>
<body>
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
                <div class="modal-kankou-post" onclick="location.href='./search-kankou.php'">
                     <p>観光名所投稿</p>
                     <img src="./images/post-kankou.svg" style="width: 6rem; height: 7rem;" alt="">
                </div>
                 <div class="modal-food-post" onclick="location.href='./search-food.php'">
                     <p>飲食店投稿</p>
                    <img src="./images/post-food.svg" style="width: 6rem; height: 7rem;" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="stamp-container">
        <div class="center-stamp">
            <div class="triplog-post">
                <h2 class="trip-font">Trip Log</h2>
                <h2 class="total-font">総投稿数数<span>~</span>件</h2>
            </div>
            <div class="region-post">
                <div class="tohoku-div">
                    <div class="div-flex">
                       <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>北海道・東北</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                    <div class="div-flex">
                       <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>関東</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                       <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>中部</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                    <div class="div-flex">
                       <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>近畿</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                       <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>中国・四国</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                    <div class="div-flex">
                       <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>九州・沖縄</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <div class="back-button">
        <button class="back"onclick="history.back(-1);" >＜戻る</button>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
</body>
</html>