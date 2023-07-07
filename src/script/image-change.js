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