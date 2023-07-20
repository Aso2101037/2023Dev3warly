// div要素を作成
const containerPlan = document.createElement('div');
containerPlan.classList.add('container-plan');
containerPlan.id = 'plan';

// 4つのcard-ele要素を作成してcontainerPlanに追加
for (let i = 0; i < 4; i++) {
    const cardEle = document.createElement('div');
    cardEle.classList.add('card-ele');
    cardEle.style.width = '100%';

    const img = document.createElement('img');
    img.src = './images/homeback.png';
    img.classList.add('img-top');

    const textBody = document.createElement('div');
    textBody.classList.add('text-body');

    const paragraph = document.createElement('p');
    paragraph.classList.add('text');
    paragraph.textContent = 'テキストが入ります';

    // 要素を組み立てる
    textBody.appendChild(paragraph);
    cardEle.appendChild(img);
    cardEle.appendChild(textBody);
    containerPlan.appendChild(cardEle);
}

// containerPlanをid="post"の要素に追加
const postElement = document.getElementById('post');
postElement.appendChild(containerPlan);
