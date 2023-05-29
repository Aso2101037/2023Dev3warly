Vue.component('header-componet',{
    template:
    `<div class="header">
       <a href="./home.html" style="textDecoration: none"><div class="title-logo">
            <span class="title">トラスタ</span><img src="./images/plean-log.svg" class="logo" alt="飛行機のロゴ">
        </div></a>
        <div class="header-button">
            <img src="./images/profile.svg" alt="">
            <img src="./images/search.svg" alt="">
            <img src="./images/square-plus.svg" alt="">
            <a href="./login.html"><div class="login-div"><img src="./images/login.svg" alt=""><span>Login</span></div></a>
        </div>
     </div>`
    })
const app = new Vue({
    el:'#app',
})