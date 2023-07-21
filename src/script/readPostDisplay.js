// // レストランの投稿カード生成
// function createRestran(restran_id,restaurant_post_id,restaurant_title, restaurant_image, restaurant_name, restaurant_comment, restaurant_address, restaurant_start_time, restaurant_finish_time, restaurant_budget, restaurant_category_id, restaurant_date, restaurant_release){
//     // div要素を作成
// const containerPlan = document.createElement('div');
// containerPlan.classList.add('container-plan');
// containerPlan.id = 'plan';
// // 4つのcard-ele要素を作成してcontainerPlanに追加
// for (let i = 0; i < 4; i++) {
//     const cardEle = document.createElement('div');
//     cardEle.classList.add('card-ele');
//     cardEle.style.width = '100%';

//     const img = document.createElement('img');
//     img.src = restaurant_image;
//     img.classList.add('img-top');

//     const textBody = document.createElement('div');
//     textBody.classList.add('text-body');

//     const paragraph = document.createElement('p');
//     paragraph.classList.add('text');
//     paragraph.textContent = 'テキストが入ります';

//     // 要素を組み立てる
//     textBody.appendChild(paragraph);
//     cardEle.appendChild(img);
//     cardEle.appendChild(textBody);
//     containerPlan.appendChild(cardEle);
// }
// // containerPlanをid="post"の要素に追加
// const postElement = document.getElementById('post');
// postElement.appendChild(containerPlan);
// }
// レストランの投稿カード生成
function createRestran(restaurant_image){
    // div要素を作成

    const parent = document.getElementById("restran");
    const image = document.createElement("img");
    image.setAttribute("src",'data:image/;base64,'+restaurant_image);
    parent.appendChild(image);
    console.log();
}