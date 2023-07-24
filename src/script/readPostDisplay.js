// ホームの飲食店投稿のカードを生成する機能
function createRestranCard(
  parent,
  restaurant_post_id,
  restaurant_title,
  restaurant_name,
  restaurant_comment,
  restaurant_address,
  restaurant_start_time,
  restaurant_finish_time,
  restaurant_budget,
  restaurant_category_id,
  restaurant_date,
  restaurant_release
) {
  // console.log(parent);
  // 新しい子要素1を作成
  const newCard = document.createElement("div");
  newCard.className = "card-ele";
  newCard.style.width = "100%";
  newCard.innerHTML =
    `
        <img id=` +
    restaurant_post_id +
    ` src="./images/homeback.png" class="img-top" alt="...">
        <div class="text-body">
            <h4 class="text">` +
    restaurant_title +
    `</h4>
            <p>` +
    restaurant_comment +
    `</p>
        </div>`;
  // 新しい子要素を親要素に追加
  parent.appendChild(newCard);
}
// ホームの飲食店投稿の画像を持ってくる機能
function createRestranImg(restaurant_post_id, restaurant_image) {
  const img_id = document.getElementById(restaurant_post_id);
  img_id.src = "data:image/jpg;base64," + restaurant_image;
  console.log(img_id);
}
// 観光名所投稿のカードを生成する機能
function createTouristCard(
  parent,
  tourist_spot_id,
  tourist_spot_name,
  tourist_spot_address,
  tourist_spot_start,
  tourist_spot_end,
  tourist_spot_title,
  tourist_spot_comment,
  category_id,
  plan_spot_day,
  tourist_release
) {
  // console.log(parent);
  // 新しい子要素1を作成
  const newCard = document.createElement("div");
  newCard.className = "card-ele";
  newCard.style.width = "100%";
  newCard.innerHTML =
    `
        <img id=` +
    tourist_spot_id +
    ` src="./images/homeback.png" class="img-top" alt="...">
        <div class="text-body">
            <h4 class="text">` +
    tourist_spot_title +
    `</h4>
            <p>` +
    tourist_spot_comment +
    `</p>
        </div>`;
  // 新しい子要素を親要素に追加
  parent.appendChild(newCard);
}
//観光名所投稿の画像を持ってくる機能
function createTouristImg(tourist_spot_id, tourist_spot_image) {
  console.log(tourist_spot_id);
  const tourist_img_id = document.getElementById(tourist_spot_id);
  tourist_img_id.src = "data:image/jpg;base64," + tourist_spot_image;
  console.log(tourist_img_id);
}
// 飲食店・観光名所投稿数に応じてカードを作成する関数
function createAllCard(container_id, post_id, title, comment) {
    const newCard = document.createElement("div");
    newCard.className = "card-ele";
    newCard.style.width = "100%";
    newCard.innerHTML =
    `<img id=`+post_id +` src="./images/homeback.png" class="img-top" alt="...">
          <div class="text-body">
              <h4 class="text">`+ title +`</h4>
                  <p>` + comment +`</p>
          </div>`;
    // 新しい子要素を親要素に追加
    container_id.appendChild(newCard);
  }
  // 飲食店・観光名所投稿数に応じてカードの画像を生成する関数
  function createSetImg(post_id,image){
      const img_id = document.getElementById(post_id);
    img_id.src = "data:image/jpg;base64," + image;
  }