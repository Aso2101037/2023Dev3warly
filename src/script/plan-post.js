var PostComponent = Vue.component('post-component',{
    template:
` <div class="post-container">
    <div class="back-color">
        <div class="left-container">
            <div class="comment-div">
                <img src="./images/comment.svg" class="logo-img" alt="">
                <input type="text" class="comment-text" name="comment" placeholder="コメント" required="required">
            </div>
            <div class="place-div">
                <img src="./images/place.svg" class="logo-img" alt="">
                <select name="place-select" id="prefectures" required="required"></select>
                <input type="text" class="place-text" name="place" placeholder="場所を入力して下さい" required="required">
            </div>
            <div class="traffic-div">
                <img src="./images/traffic.svg" class="logo-img" alt="">
                <select name="traffic-select" id="traffic" required="required"></select>
                <span>約</span><input type="number" min="0" name="traffic-timer" id="" class="number-text" required="required">
            </div>
            <div class="time-div">
                <img src="./images/timer.svg" class="logo-img" alt="">
                <input type="time" name="timer-first" id="" required="required"><span>～</span><input type="time" name="timer-secend" id="" required="required">
            </div>
            <div class="file-div">
                <img src="./images/file.svg" class="logo-img" alt="">
                <label  for="up-load">写真を選択<input type="file" onchange="imageChange()" class="img-file" accept="image/*" name="img-select" id="up-load" required="required"></label>
            </div>
        </div>
        <div class="right-container">
            <img id="image-add" name="img-display">
        </div>
     </div>
  </div>`
    });
const post = new Vue({
    el:'#post',
})

