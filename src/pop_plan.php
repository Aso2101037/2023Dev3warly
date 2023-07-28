<?php
require_once "./DBmanager.php";
$db = new DBManager;
?>
<!DOCTYPE html>
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
<nav>
  <ol class="breadcrumb">
    <li class="list"><a href="home.php">Home</a></li>>
    <li class="list">人気の旅行プラン</li>
  </ol>
</nav>
<div id="card"></div>
        
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="./script/header.js"></script>
<script src="./script/readPostDisplay.js"></script>
<script>
    const PlanData = <?php echo $db->getAllPlanData(); ?>;
        const PlanCnt = <?php echo $db->getPlanCnt(); ?>;
        let Cnt = PlanCnt / 4;
        let Nomuch = PlanCnt % 4;
        var num = 1;
        const N = "";
        const card_id = document.getElementById("card");

        // RestranDataを4つずつ分割する
        const chunkSize = 4;
        const chunkedPlanData = [];
        for (let i = 0; i < PlanData.length - Nomuch; i += chunkSize) {
            const chunk = PlanData.slice(i, i + chunkSize);
            chunkedPlanData.push(chunk);
        }

        for (let i = 0; i < Cnt; i++) {
            const ContainerDiv = document.createElement("div");
            ContainerDiv.id = "container_" + [num];
            ContainerDiv.className = "container-plan";
            card_id.appendChild(ContainerDiv);
            num++;

            const currentData = chunkedPlanData[i];
            currentData.forEach(ele => {
                createAllPlanCard(ContainerDiv, ele.plan_post_id, ele.plan_title,N);
            });
        }
    // 旅行プランの画像を取得
    const PlanImgList = <?php echo $db->getPlanImg(); ?>;
        Object.keys(PlanImgList).forEach(element => {
                createPlanImg(PlanImgList[element].id, PlanImgList[element].img);
        });
    </script>
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