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
    <link rel="stylesheet" href="./style/login-out.css">
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
    <div class="img-error">
                <img src="images/icon.svg" class="icon">
                <h2>login</h2>
                <div class="error">メールアドレスまたはパスワードが間違っています。</div>
    </div>
    <a href="./user-signup.php"><button class="sign-up" type="button">Sign up</button></a>
    <form class="form-signin">
        <div class="email">
            <input type="email" id="inputEmail" class="form-control mx-auto" placeholder="メールアドレスを入力してください" required autofocus>
        </div>
        <div class="password">
            <input type="password" id="inputPassword" class="form-control mx-auto" placeholder="パスワードを入力してください" required>
        </div>
        <button class="back" type="button" onclick="history.back(-1);">＜戻る</button>
        <button class="sign-up" type="button">Login</button>
        
      </form>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/header.js"></script>
</body>
</html>