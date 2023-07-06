// 都道府県のセレクトボックス用
window.onload = function () {
  var prefectures = [
    { cd: "", label: "▼都道府県" },
    { cd: "1", label: "北海道" },
    { cd: "2", label: "青森県" },
    { cd: "3", label: "岩手県" },
    { cd: "4", label: "宮城県" },
    { cd: "5", label: "秋田県" },
    { cd: "6", label: "山形県" },
    { cd: "7", label: "福島県" },
    { cd: "8", label: "茨城県" },
    { cd: "9", label: "栃木県" },
    { cd: "10", label: "群馬県" },
    { cd: "11", label: "埼玉県" },
    { cd: "12", label: "千葉県" },
    { cd: "13", label: "東京都" },
    { cd: "14", label: "神奈川県" },
    { cd: "15", label: "新潟県" },
    { cd: "16", label: "富山県" },
    { cd: "17", label: "石川県" },
    { cd: "18", label: "福井県" },
    { cd: "19", label: "山梨県" },
    { cd: "20", label: "長野県" },
    { cd: "21", label: "岐阜県" },
    { cd: "22", label: "静岡県" },
    { cd: "23", label: "愛知県" },
    { cd: "24", label: "三重県" },
    { cd: "25", label: "滋賀県" },
    { cd: "26", label: "京都府" },
    { cd: "27", label: "大阪府" },
    { cd: "28", label: "兵庫県" },
    { cd: "29", label: "奈良県" },
    { cd: "30", label: "和歌山県" },
    { cd: "31", label: "鳥取県" },
    { cd: "32", label: "島根県" },
    { cd: "33", label: "岡山県" },
    { cd: "34", label: "広島県" },
    { cd: "35", label: "山口県" },
    { cd: "36", label: "徳島県" },
    { cd: "37", label: "香川県" },
    { cd: "38", label: "愛媛県" },
    { cd: "39", label: "高知県" },
    { cd: "40", label: "福岡県" },
    { cd: "41", label: "佐賀県" },
    { cd: "42", label: "長崎県" },
    { cd: "43", label: "熊本県" },
    { cd: "44", label: "大分県" },
    { cd: "45", label: "宮崎県" },
    { cd: "46", label: "鹿児島県" },
    { cd: "47", label: "沖縄県" },
  ];
  for (var i = 0; i < prefectures.length; i++) {
    let op = document.createElement("option");
    op.value = prefectures[i].cd;
    op.text = prefectures[i].label;
    document.getElementById("prefectures").appendChild(op);
  }
  // 交通量のセレクトボックス用
  var traffic = [
    { id: "", label: "▼交通機関" },
    { id: "1", label: "徒歩" },
    { id: "2", label: "自転車" },
    { id: "3", label: "車" },
    { id: "4", label: "バス" },
    { id: "5", label: "電車" },
    { id: "", label: "タクシー" },
    { id: "", label: "フェリー" },
    { id: "", label: "地下鉄" },
    { id: "", label: "路面電車" },
    { id: "", label: "モノレール" },
    { id: "", label: "バイク" },
  ];
  for (var i = 0; i < traffic.length; i++) {
    let op = document.createElement("option");
    op.value = traffic[i].cd;
    op.text = traffic[i].label;
    document.getElementById("traffic").appendChild(op);
  }
};

var count = 1;
// 投稿カードが増えていくやつ
const addele = () => {
  // <div class="post-container">の部分
  const postId = document.getElementById("post");
  const PostContainer = document.createElement("div");
  PostContainer.id = "PostContainerId" + [count];
  PostContainer.className = "post-container";
  postId.appendChild(PostContainer);

  // <div class="back-color">の部分
  const getPostId = document.getElementById("PostContainerId" + [count]);
  const BackColor = document.createElement("div");
  BackColor.id = "BackColorId" + [count];
  BackColor.className = "back-color";
  getPostId.appendChild(BackColor);

  // <div class="left-container">の部分
  const getBackColorId = document.getElementById("BackColorId" + [count]);
  const LeftContainer = document.createElement("div");
  LeftContainer.id = "LeftContainerId" + [count];
  LeftContainer.className = "left-container";
  getBackColorId.appendChild(LeftContainer);

  // <div class="comment-div">の部分
  const getLeftContainervId = document.getElementById(
    "LeftContainerId" + [count]
  );
  const CommentDiv = document.createElement("div");
  CommentDiv.id = "CommentDiv" + [count];
  CommentDiv.className = "comment-div";
  getLeftContainervId.appendChild(CommentDiv);

  // <div class="comment-div">の子要素<img src="./images/comment.svg" class="logo-img" alt="">の部分
  const getCommentDiv = document.getElementById("CommentDiv" + [count]);
  const CommentImg = document.createElement("img");
  CommentImg.src = "./images/comment.svg";
  CommentImg.className = "logo-img";
  getCommentDiv.appendChild(CommentImg);

  // <div class="comment-div">の子要素<input type="text" class="comment-text" placeholder="コメント">の部分
  const CommentText = document.createElement("input");
  CommentText.setAttribute("type", "text");
  CommentText.setAttribute("placeholder", "コメント");
  CommentText.className = "comment-text";
  getCommentDiv.appendChild(CommentText);

  // <div class="place-div">の部分
  const PlaceDiv = document.createElement("div");
  PlaceDiv.id = "PlaceDiv" + [count];
  PlaceDiv.className = "place-div";
  getLeftContainervId.appendChild(PlaceDiv);

  // <div class="place-div">の子要素<img src="./images/place.svg" class="logo-img" alt="">の部分
  const getPlaceDiv = document.getElementById("PlaceDiv" + [count]);
  const PlaceImg = document.createElement("img");
  PlaceImg.src = "./images/place.svg";
  PlaceImg.className = "logo-img";
  getPlaceDiv.appendChild(PlaceImg);

  // <div class="place-div">の子要素<select name="" id="prefectures"></select>の部分
  const PlaceSelect = document.createElement("select");
  PlaceSelect.id = "prefectures" + [count];
  getPlaceDiv.appendChild(PlaceSelect);

  // <div class="place-div">の子要素<input type="text" class="place-text" placeholder="場所を入力して下さい">の部分
  const PlaceText = document.createElement("input");
  PlaceText.setAttribute("type", "text");
  PlaceText.className = "place-text";
  PlaceText.setAttribute("placeholder", "場所を入力してください");
  getPlaceDiv.appendChild(PlaceText);

  // <div class="traffic-div">の部分
  const TrafficDiv = document.createElement("div");
  TrafficDiv.id = "TrafficDiv" + [count];
  TrafficDiv.className = "place-div";
  getLeftContainervId.appendChild(TrafficDiv);

  // <div class="traffic-div">の子要素<img src="./images/traffic.svg" class="logo-img" alt="">の部分
  const getTrafficDiv = document.getElementById("TrafficDiv" + [count]);
  const TrafficImg = document.createElement("img");
  TrafficImg.src = "./images/traffic.svg";
  TrafficImg.className = "logo-img";
  getTrafficDiv.appendChild(TrafficImg);

  // <div class="traffic-div">の子要素<select name="" id="traffic"></select>の部分
  const TrafficSelect = document.createElement("select");
  TrafficSelect.id = "traffic" + [count];
  getTrafficDiv.appendChild(TrafficSelect);

  //<div class="traffic-div">の子要素<span>約</span><input type="number" min="0" name="" id="" class="number-text">の部分
  const TrafficSpan = document.createElement("span");
  TrafficSpan.innerHTML = "約";
  getTrafficDiv.appendChild(TrafficSpan);
  const TrafficNumber = document.createElement("input");
  TrafficNumber.setAttribute("type", "number");
  TrafficNumber.setAttribute("min", "0");
  TrafficNumber.className = "number-text";
  getTrafficDiv.appendChild(TrafficNumber);

  //<div class="time-div">の部分
  const TimeDiv = document.createElement("div");
  TimeDiv.id = "TimeDiv" + [count];
  TimeDiv.className = "time-div";
  getLeftContainervId.appendChild(TimeDiv);

  // <div class="time-div">の子要素<img src="./images/timer.svg" class="logo-img" alt="">の部分
  const getTimeDiv = document.getElementById("TimeDiv" + [count]);
  const TimeImg = document.createElement("img");
  TimeImg.src = "./images/timer.svg";
  TimeImg.className = "logo-img";
  getTimeDiv.appendChild(TimeImg);

  // <div class="time-div">の子要素<input type="time" name="" id=""><span>～</span><input type="time" name="" id="">の部分
  const Time1 = document.createElement("input");
  const TimeSpan = document.createElement("span");
  const Time2 = document.createElement("input");
  Time1.setAttribute("type", "time");
  TimeSpan.innerHTML = "～";
  Time2.setAttribute("type", "time");
  getTimeDiv.appendChild(Time1);
  getTimeDiv.appendChild(TimeSpan);
  getTimeDiv.appendChild(Time2);

  //<div class="file-div">の部分
  const FileDiv = document.createElement("div");
  FileDiv.id = "FileDiv" + [count];
  FileDiv.className = "file-div";
  getLeftContainervId.appendChild(FileDiv);

  // <div class="time-div">の子要素<img src="./images/file.svg" class="logo-img" alt="">の部分
  const getFileDiv = document.getElementById("FileDiv" + [count]);
  const FileImg = document.createElement("img");
  FileImg.src = "./images/file.svg";
  FileImg.className = "logo-img";
  getFileDiv.appendChild(FileImg);

  // <div class="time-div">の子要素<label for="up-load">写真を選択</label>の部分
  const FileLabel = document.createElement("label");
  FileLabel.setAttribute("for", "up-load" + [count]);
  FileLabel.id = "FileLabel" + [count];
  FileLabel.innerHTML = "写真を選択";
  getFileDiv.appendChild(FileLabel);

  // <label for="up-load">写真を選択</label>の子要素<input type="file" class="img-file" name="" id="up-load">の部分
  const getFileLabelId = document.getElementById("FileLabel" + [count]);
  const FileType = document.createElement("input");
  FileType.setAttribute("type", "file");
  FileType.id = "up-load" + [count];
  FileType.className = "img-file";
  FileType.setAttribute("onchange", "imageChange()");
  getFileLabelId.appendChild(FileType);

  // <div class="right-container">の部分
  const RightContainer = document.createElement("div");
  RightContainer.id = "RightContainerId" + [count];
  RightContainer.className = "right-container";
  getBackColorId.appendChild(RightContainer);
  // カードの削除ボタンの部分
  const getRightContainerId = document.getElementById(
    "RightContainerId" + [count]
  );
  const deleteButton = document.createElement("button");
  deleteButton.id = "delete-button" + [count];
  deleteButton.className = "delete-buttons"
  deleteButton.textContent = "ー";
  deleteButton.setAttribute("onclick", "deleteCard(this)");
  getRightContainerId.appendChild(deleteButton);

  // <img id="img-file">の部分
  // const getRightContainerId = document.getElementById("RightContainerId"+[count]);
  const RightImgFile = document.createElement("img");
  RightImgFile.id = "image-add" + [count];
  getRightContainerId.appendChild(RightImgFile);

  // 都道府県のセレクトボックス用
  var prefectures = [
    { cd: "", label: "▼都道府県" },
    { cd: "1", label: "北海道" },
    { cd: "2", label: "青森県" },
    { cd: "3", label: "岩手県" },
    { cd: "4", label: "宮城県" },
    { cd: "5", label: "秋田県" },
    { cd: "6", label: "山形県" },
    { cd: "7", label: "福島県" },
    { cd: "8", label: "茨城県" },
    { cd: "9", label: "栃木県" },
    { cd: "10", label: "群馬県" },
    { cd: "11", label: "埼玉県" },
    { cd: "12", label: "千葉県" },
    { cd: "13", label: "東京都" },
    { cd: "14", label: "神奈川県" },
    { cd: "15", label: "新潟県" },
    { cd: "16", label: "富山県" },
    { cd: "17", label: "石川県" },
    { cd: "18", label: "福井県" },
    { cd: "19", label: "山梨県" },
    { cd: "20", label: "長野県" },
    { cd: "21", label: "岐阜県" },
    { cd: "22", label: "静岡県" },
    { cd: "23", label: "愛知県" },
    { cd: "24", label: "三重県" },
    { cd: "25", label: "滋賀県" },
    { cd: "26", label: "京都府" },
    { cd: "27", label: "大阪府" },
    { cd: "28", label: "兵庫県" },
    { cd: "29", label: "奈良県" },
    { cd: "30", label: "和歌山県" },
    { cd: "31", label: "鳥取県" },
    { cd: "32", label: "島根県" },
    { cd: "33", label: "岡山県" },
    { cd: "34", label: "広島県" },
    { cd: "35", label: "山口県" },
    { cd: "36", label: "徳島県" },
    { cd: "37", label: "香川県" },
    { cd: "38", label: "愛媛県" },
    { cd: "39", label: "高知県" },
    { cd: "40", label: "福岡県" },
    { cd: "41", label: "佐賀県" },
    { cd: "42", label: "長崎県" },
    { cd: "43", label: "熊本県" },
    { cd: "44", label: "大分県" },
    { cd: "45", label: "宮崎県" },
    { cd: "46", label: "鹿児島県" },
    { cd: "47", label: "沖縄県" },
  ];
  for (var i = 0; i < prefectures.length; i++) {
    let op = document.createElement("option");
    op.value = prefectures[i].cd;
    op.text = prefectures[i].label;
    document.getElementById("prefectures" + [count]).appendChild(op);
  }
  // 交通量のセレクトボックス用
  var traffic = [
    { id: "", label: "▼交通機関" },
    { id: "1", label: "徒歩" },
    { id: "2", label: "自転車" },
    { id: "3", label: "車" },
    { id: "4", label: "バス" },
    { id: "5", label: "電車" },
    { id: "6", label: "タクシー" },
    { id: "7", label: "フェリー" },
    { id: "8", label: "地下鉄" },
    { id: "9", label: "路面電車" },
    { id: "10", label: "モノレール" },
    { id: "11", label: "バイク" },
  ];
  for (var i = 0; i < traffic.length; i++) {
    let op = document.createElement("option");
    op.value = traffic[i].cd;
    op.text = traffic[i].label;
    document.getElementById("traffic" + [count]).appendChild(op);
  }
  count++;
};
// 画像を表示させるプログラム
function imageChange() {
  var num = count - 1;

  if (num == 0) {
    // ファイルの情報を取得
    var fileInput = document.getElementById("up-load");
    var file = fileInput.files[0];

    // FileReaderオブジェクトを作成
    var reader = new FileReader();

    // 画像が読み込まれた時の処理を定義
    reader.onload = function (e) {
      // 画像を表示する要素を取得
      var imageAdd = document.getElementById("image-add");
      // 画像のパスを設定
      imageAdd.src = e.target.result;
    };

    // 画像を読み込む
    if (file) {
      reader.readAsDataURL(file);
    }
  } else {
    getId = document.getElementById("up-load");
    var strJoin = getId.id + num.toString();
    fileInput = document.getElementById(strJoin);
    file = fileInput.files[0];

    var reader = new FileReader();

    reader.onload = function (e) {
      imageId = document.getElementById("image-add");
      addNum = imageId.id + num.toString();
      imageAdd = document.getElementById(addNum);
      imageAdd.src = e.target.result;
    };

    if (file) {
      reader.readAsDataURL(file);
    }
  }
}
function deleteCard(button) {
  var postContainer = button.parentNode.parentNode.parentNode;
  postContainer.parentNode.removeChild(postContainer);
}