<!DOCTYPE html>
<html lang="en">
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
        <header-componet></header-componet>
    </div>
    <div class="img-error">
                <img src="images/icon.svg" class="icon">
                <h2>login</h2>
                <div class="error"></div>
    </div>
    <form class="form-signin">
        <div class="email">
            <input type="email" id="inputEmail" class="form-control mx-auto" placeholder="メールアドレスを入力してください" required autofocus>
        </div>
        <div class="password">
            <input type="password" id="inputPassword" class="form-control mx-auto" placeholder="パスワードを入力してください" required>
        </div>
        <button class="back" type="submit">＜戻る</button>
        <button class="sign-up" type="submit">Sign up</button>
        
      </form>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./script/main.js"></script>
</body>
</html>