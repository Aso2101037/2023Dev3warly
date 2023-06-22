var PostComponent = Vue.component('post-component',{
    template:
` <div class="post-container">
    <div class="back-color">
        <div class="left-container">
            <div class="comment-div">
                <img src="./images/comment.svg" class="logo-img" alt="">
                <input type="text" class="comment-text" placeholder="コメント">
            </div>
            <div class="place-div">
                <img src="./images/place.svg" class="logo-img" alt="">
                <select name="" id="prefectures"></select>
                <input type="text" class="place-text" placeholder="場所を入力して下さい">
            </div>
            <div class="traffic-div">
                <img src="./images/traffic.svg" class="logo-img" alt="">
                <select name="" id="traffic"></select>
                <span>約</span><input type="number" min="0" name="" id="" class="number-text">
            </div>
            <div class="time-div">
                <img src="./images/timer.svg" class="logo-img" alt="">
                <input type="time" name="" id=""><span>～</span><input type="time" name="" id="">
            </div>
            <div class="file-div">
                <img src="./images/file.svg" class="logo-img" alt="">
                <label for="up-load">写真を選択<input type="file" class="img-file" name="" id="up-load"></label>
            </div>
        </div>
        <div class="right-container">
            <div id="img-div"></div>
        </div>
     </div>
  </div>`
    });
const post = new Vue({
    el:'#post',
})

