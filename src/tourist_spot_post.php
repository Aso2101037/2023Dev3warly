<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トラスタ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/tourist_spot_post-style.css">
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
<form action="tourist_post_kakunin1.php" method="post" enctype="multipart/form-data">
    <div class="flex">
        <div class="left">
            <div class="sinkisakusei">新規投稿を作成</div>
            <input type="checkbox"class="koukai_check" name = "form_koukai" value = "1"> <span class="koukai">公開</span>
            <input type="text"class="title-text" name="form_title" placeholder="ここにタイトルを入力">
            <div class="img-post" id="image-add">
                    <img src="images/picture.svg"  class="photo-img">
                    <label  for="image"class="img-select">写真を選択
                        <input type="file" onchange="imageChange()" class="img-file" accept="image/*" name="image" id="image" required="required">
                    </label>
            </div>
        </div>
        <div class="right">
            <div class="icon-nickname">
                <img src="images/icon.svg"class="icon"><div class="nickname">〇〇〇〇〇</div>
            </div>
            <div class="komokumei">観光名所名</div>
            <input type="text"class="tourist_text" name="form_tourist_name">

            <div class="komokumei">コメント</div>
            <textarea class="comment_text" name="form_tourist_comment">
            </textarea>

            <div class="komokumei">住所</div>
            <select class="pref" name="form_jusyo">
                <option value="" selected>都道府県</option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
            </select>
            <input type="text"class="address_text" name ="form_address_text">

            <div class="komokumei">営業時間</div>

            <input type="time" name="timer-first0" id="" class="time_text"required="required"><span class="kara">～</span><input type="time" name="timer-secend0" id="" class="time_text"required="required">
            
            <div class="komokumei">カテゴリー</div>
                <div class="radios">
                    <input type="radio" name="category" value = "1" id="tosi" checked> <label class="categorymei" for="tosi"><img src="images/city.svg" class="komoku-img"><span class="categorymei-moji">都市</span></label>
                    <input type="radio" name="category" value = "2" class="radio-right" id="onsen"> <label class="categorymei"for="onsen"><img src="images/onsen.svg"class="komoku-img"><span class="categorymei-moji">温泉</span></label>
                </div>
                <div class="radios">
                    <input type="radio" name="category" value = "3" id="bae"> <label class="categorymei"for="bae"><img src="images/shine.svg"class="komoku-img"><span class="categorymei-moji">映え</span></label>
                    <input type="radio" name="category" value = "4" class="radio-right"id="tera"> <label class="categorymei"for="tera"><img src="images/temple.svg"class="komoku-img"><span class="categorymei-moji">神社・寺</span></label>
                </div>
                <div class="radios">
                    <input type="radio" name="category" value = "5"id="sizen"> <label class="categorymei"for="sizen"><img src="images/scenery.svg"class="komoku-img"><span class="categorymei-moji">自然風景</span></label>
                    <input type="radio" name="category" value = "6" class="radio-right"id="burari"> <label class="categorymei"for="burari"><img src="images/aimlessly.svg"class="komoku-img-burari"><span class="categorymei-moji">ぶらり</span></label>
                </div>
            </div>
    </div>
    </div>

    <div class="btn">
        <button class="back" type="button" onclick="history.back(-1);">＜戻る</button>
        <button class="sign-up" type="submit">Share</button>
    </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
    <script src="./script/image-change.js"></script>
    <script>
        const Login_flag = "<?php echo $login; ?>";
        var log = document.getElementById("kari");
        if(Login_flag=="1"){
                log.innerHTML="Logout";
        }else{
            log.innerHTML="LogIn";
        }
    </script>
</body>
</html>