Vue.component('card-component',{
    template:
`<div class="container-plan">
        <div class="card-ele" style="width:100%;">
            <img id="aaa" src="./images/homeback.png" class="img-top" alt="...">
                 <div class="text-body">
                     <p class="text">テキストが入ります</p>
                </div>
        </div>
         <div class="card-ele" style="width:100%;">
             <img src="./images/homeback.png" class="img-top" alt="...">
                <div class="text-body">
                 <p class="text">テキストが入ります</p>
                </div>
        </div>
         <div class="card-ele" style="width:100%;">
            <img src="./images/homeback.png" class="img-top" alt="...">
                <div class="text-body">
                    <p class="text">テキストが入ります</p>
                </div>
        </div>
        <div class="card-ele" style="width:100%;">
            <img src="./images/homeback.png" class="img-top" alt="...">
                <div class="text-body">
                    <p class="text">テキストが入ります</p>
                </div>
        </div>
</div>`
    })
const card = new Vue({
    el:'#card',
})