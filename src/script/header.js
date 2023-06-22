 Vue.component('header-component',{
    template:
    `<div class="header">
       <a href="./home.php" style="textDecoration: none"><div class="title-logo">
            <span class="title">トラスタ</span><img src="./images/plean-log.svg" class="logo" alt="飛行機のロゴ">
        </div></a>
        <div class="header-button">
            <img src="./images/profile.svg" alt="">
            <img src="./images/search.svg" @click="$emit('clicksearch')" alt="">
            <img src="./images/square-plus.svg" @click="$emit('clickpost')" alt="">
            <a href="./login.php"><div class="login-div"><img src="./images/login.svg" alt=""><span>Login</span></div></a>
        </div>
     </div>`
    });
const app = new Vue({
    el:'#app',
    data(){
        return{
            isActive:false,
            postActive:false
        };
    },
    methods:{
        ModalSeach(){
            this.isActive = !this.isActive;
        },
        ModalPost(){
            this.postActive = !this.postActive;
        }
    }
})