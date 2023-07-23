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
    <!-- 画像の部分↓↓ -->
    <div class="img-div">
        <img src="./images/backgroundimg.png" alt="">
    </div>
    <div class="post-select">
        <div class="plan-div" onclick="location.href='./plan-post.php'">
            <img src="./images/post-plan.svg" alt=""><span class="post-font">旅行プランの投稿</span>
        </div>
        <div class="kankou-div" onclick="location.href='./tourist_spot_post.php'">
            <img src="./images/post-kankou.svg" alt=""><span class="post-font">観光名所の投稿</span>
        </div>
        <div class="food-div" onclick="location.href='./restaurant_post.php'">
            <img src="./images/post-food.svg" alt=""><span class="post-font">飲食店の投稿</span>
        </div>
    </div>
    </div>
    <!-- 旅行プランのカード↓↓ -->
    <div id="card">
        <h1 class="favorite-font" onclick="location.href='./pop_plan.php'">人気の旅行プラン</h1>
        <!-- <div class="container-plan" id="plan"></div> -->
        <card-component></card-component>
        <h1 class="favorite-font" onclick="location.href='./pop_tourist_spot.php'">人気の観光名所</h1>
        <div class="container-plan" id="tourist"></div>
        <h1 class="favorite-font" onclick="location.href='./pop_restaurant.php'">人気の飲食店</h1>
        <div class="container-plan" id="restran"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
    <script src="./script/card.js"></script>
    <script src="./script/readPostDisplay.js"></script>
    <script>
        var restran_id = document.getElementById("restran");
        var tourist_id = document.getElementById("tourist");

        // 画像以外のデーターをJSON形式で持ってくる
        const RestranData = <?php echo $db->getAllRestranData(); ?>;
        // console.log(RestranData);
        let restranCnt1 = 0;
        RestranData.forEach(ele => {
            if (restranCnt1 < 4) {
                restranCnt1++;
                createRestranCard(restran_id, ele.restaurant_post_id, ele.restaurant_title, ele.restaurant_name, ele.restaurant_comment, ele.restaurant_address, ele.restaurant_start_time, ele.restaurant_finish_time, ele.restaurant_budget, ele.restaurant_category_id, ele.restaurant_date, ele.restaurant_release);
            }
        });
        // 観光名所投稿の部分
        const TouristData = <?php echo $db->getAllTouristData(); ?>;
        // console.log(TouristData);
        let TouristCnt1 = 0;
        TouristData.forEach(ele => {
            if (TouristCnt1 < 4) {
                TouristCnt1++;
                createTouristCard(tourist_id,ele.tourist_spot_id, ele.tourist_spot_name,ele.tourist_spot_address,ele.tourist_spot_start,ele.tourist_spot_end,ele.tourist_spot_title,ele.tourist_spot_comment,ele.category_id,ele.plan_spot_day,ele.tourist_release);
            }
        });
        
        // 画像をJSON形式で持ってくる
        const RestranImgList = <?php echo $db->getAllRestranImg(); ?>;
        let restranCnt2 = 0;
        // console.log(RestranImgList);
        Object.keys(RestranImgList).forEach(element => {
            if (restranCnt2 < 4) {
                restranCnt2++;
                // console.log(RestranImgList[element]);
                createRestranImg(RestranImgList[element].id, RestranImgList[element].img);
                // createRestran関数の引数に直接画像データを渡す
            }
        });
        const TouristImgList = <?php echo $db->getAllTouristImg(); ?>;
        let TouristCnt2 = 0;
        console.log(TouristImgList);
        Object.keys(TouristImgList).forEach(element => {
            if (TouristCnt2 < 4) {
                TouristCnt2++;
                createTouristImg(TouristImgList[element].id, TouristImgList[element].img);
                // createRestran関数の引数に直接画像データを渡す
            }
        });
    </script>
</body>

</html>