// レストラン投稿のカードを生成する機能
function createRestranCard(parent,restaurant_post_id,restaurant_title,restaurant_name, restaurant_comment, restaurant_address, restaurant_start_time, restaurant_finish_time, restaurant_budget, restaurant_category_id, restaurant_date, restaurant_release){
    // id="restran"の親要素を取得
    const containerPlan = document.getElementById(parent);
    // console.log(parent);
    // 新しい子要素1を作成
    const newCard = document.createElement("div");
    newCard.className = "card-ele";
    newCard.style.width = "100%";
    newCard.innerHTML = `
        <img id=`+restaurant_post_id+` src="./images/homeback.png" class="img-top" alt="...">
        <div class="text-body">
            <h4 class="text">`+restaurant_title+`</h4>
            <p>`+restaurant_comment+`</p>
        </div>`;
    // 新しい子要素を親要素に追加
    parent.appendChild(newCard);
}
// レストラン投稿の画像を持ってくる機能
function createRestranImg(restaurant_post_id,restaurant_image){
    const img_id = document.getElementById(restaurant_post_id);
   img_id.src ='data:image/jpg;base64,'+restaurant_image;
    console.log(img_id);
}