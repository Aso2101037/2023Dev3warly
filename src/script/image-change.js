// function imageChange() {
//     var fileInput = document.getElementById('image');
//     var image = document.getElementById('image-add');
//     if (fileInput.files && fileInput.files[0]) {
//       var reader = new FileReader();
  
//       reader.onload = function (e) {
//         image.src = e.target.result;
//       };
  
//       reader.readAsDataURL(fileInput.files[0]);
//     }
//   }
function imageChange(){
  //ファイルの情報を取得
    var fileInput = document.getElementById("image");
    var file = fileInput.files[0];

    // FileReaderオブジェクトを作成
    var reader = new FileReader();

    // 画像が読み込まれた時の処理を定義
    reader.onload = function (e) {
      // 画像を表示する要素を取得
      var imageAdd = document.getElementById("image-add");
      // 画像のパスを設定
      imageAdd.style.backgroundImage = "url("+e.target.result+")";

    };
      var defaultImage = document.querySelector(".photo-img");
      defaultImage.style.display ="none";
      var labelFont = document.querySelector(".img-select");
      labelFont.style.opacity = "0.3";

    // 画像を読み込む
    if (file) {
      reader.readAsDataURL(file);
    }
  }
//ボタンを押下すると、写真ファイルの選択になる動作
document.getElementById('image_select').addEventListener('click', function(event) {
  event.preventDefault(); // デフォルトの動作をキャンセル

  document.getElementById('image').click();
});
  function spotChange() {
    var fileInput = document.getElementById('spot');
    var image = document.getElementById('spot_image');
  
    if (fileInput.files && fileInput.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function (e) {
        image.src = e.target.result;
      };
  
      reader.readAsDataURL(fileInput.files[0]);
    }
  }

  //ボタンを押下すると、写真ファイルの選択になる動作
  // ※このコード同じファイルに2つあると動かんくなるから注意
document.getElementById('spot_image_select').addEventListener('click', function(event) {
  event.preventDefault(); // デフォルトの動作をキャンセル

  document.getElementById('spot').click();
});