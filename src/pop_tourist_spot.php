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
    <link rel="stylesheet" href="./style/populer.css">
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
    <nav>
        <ol class="breadcrumb">
            <li class="list"><a href="home.php">Home</a></li>>
            <li class="list">人気の観光名所</li>
        </ol>
    </nav>
    <div id="card"></div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/readPostDisplay.js"></script>
    <script src="./script/header.js"></script>
    <script>
        const TouristData = <?php echo $db->getAllTouristData(); ?>;
        const TouristCnt = <?php echo $db->getTouristCnt(); ?>;
        let Cnt = TouristCnt / 4;
        let Nomuch = TouristCnt % 4;
        var num = 1;
        const card_id = document.getElementById("card");

        // RestranDataを4つずつ分割する
        const chunkSize = 4;
        const chunkedTouristData = [];
        for (let i = 0; i < TouristData.length - Nomuch; i += chunkSize) {
            const chunk = TouristData.slice(i, i + chunkSize);
            chunkedTouristData.push(chunk);
        }

        for (let i = 0; i < Cnt; i++) {
            const ContainerDiv = document.createElement("div");
            ContainerDiv.id = "container_" + [num];
            ContainerDiv.className = "container-plan";
            card_id.appendChild(ContainerDiv);
            num++;

            const currentData = chunkedTouristData[i];
            currentData.forEach(ele => {
                createAllTouristCard(ContainerDiv, ele.tourist_spot_id, ele.tourist_spot_name,ele.tourist_spot_address,ele.tourist_spot_start,ele.tourist_spot_end,ele.tourist_spot_title,ele.tourist_spot_comment,ele.category_id,ele.plan_spot_day,ele.tourist_release);
            });
        }
        const TouristImgList = <?php echo $db->getAllTouristImg(); ?>;
        let TouristCnt2 = 0;
        console.log(TouristImgList);
        Object.keys(TouristImgList).forEach(element => {
            createSetImg(TouristImgList[element].id, TouristImgList[element].img);
                // createRestran関数の引数に直接画像データを渡す
        });
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