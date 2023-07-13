function imageChange() {
    var fileInput = document.getElementById('image');
    var image = document.getElementById('image-add');
  
    if (fileInput.files && fileInput.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function (e) {
        image.src = e.target.result;
      };
  
      reader.readAsDataURL(fileInput.files[0]);
    }
  }
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