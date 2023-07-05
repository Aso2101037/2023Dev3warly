var PostComponent = Vue.component('post-component',{
    template:
` <div class="post-container">
    <div class="back-color">
        <div class="left-container">
            <div class="comment-div">
                <img src="./images/comment.svg" class="logo-img" alt="">
                <input type="text" class="comment-text" placeholder="コメント" required="required">
            </div>
            <div class="place-div">
                <img src="./images/place.svg" class="logo-img" alt="">
                <select name="" id="prefectures" required="required"></select>
                <input type="text" class="place-text" placeholder="場所を入力して下さい" required="required">
            </div>
            <div class="traffic-div">
                <img src="./images/traffic.svg" class="logo-img" alt="">
                <select name="" id="traffic" required="required"></select>
                <span>約</span><input type="number" min="0" name="" id="" class="number-text" required="required">
            </div>
            <div class="time-div">
                <img src="./images/timer.svg" class="logo-img" alt="">
                <input type="time" name="" id="" required="required"><span>～</span><input type="time" name="" id="" required="required">
            </div>
            <div class="file-div">
                <img src="./images/file.svg" class="logo-img" alt="">
                <label  for="up-load">写真を選択<input type="file" onchange="imageChange()" class="img-file" accept="image/*" name="" id="up-load" required="required"></label>
            </div>
        </div>
        <div class="right-container">
            <img id="image-add">
        </div>
     </div>
  </div>`
    });
const post = new Vue({
    el:'#post',
})

