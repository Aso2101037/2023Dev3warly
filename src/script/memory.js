Vue.component('region-component',{
    template:
` <div class="stamp-container">
        <div class="center-stamp">
            <div class="triplog-post">
                <h2 class="trip-font">Trip Log</h2>
                <h2 class="total-font">総投稿数数<span>~</span>件</h2>
            </div>
            <div class="region-post">
                <div class="tohoku-div">
                    <div class="div-flex">
                       <div class="region-div" @click="$emit('click-tohoku')"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>北海道・東北</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                    <div class="div-flex">
                       <div class="region-div" @click="$emit('click-kanto')"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>関東</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                       <div class="region-div" @click="$emit('click-tyubu')"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>中部</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                    <div class="div-flex">
                       <div class="region-div" @click="$emit('click-kinki')"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>近畿</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                       <div class="region-div" @click="$emit('click-shikoku')"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>中国・四国</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                    <div class="div-flex">
                       <div class="region-div" @click="$emit('click-kyushu')"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>九州・沖縄</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>`
});
// 北海道・東北
Vue.component('tohoku-component',{
    template:
    `<div class="stamp-container">
        <div class="center-stamp">
            <div class="triplog-post">
                <h2 class="trip-font"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 北海道・東北</h2>
                <h2 class="total-font">総投稿数数<span>~</span>件</h2>
            </div>
            <div class="region-post">
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>北海道</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>青森県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>岩手県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>宮城県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>秋田県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>山形県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>福島県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
      </div>
</div>`
});
// 関東
Vue.component('kanto-component',{
    template:
    `<div class="stamp-container">
        <div class="center-stamp">
            <div class="triplog-post">
                <h2 class="trip-font"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 関東</h2>
                <h2 class="total-font">総投稿数数<span>~</span>件</h2>
            </div>
            <div class="region-post">
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>東京都</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>千葉県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>埼玉県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>神奈川県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>群馬県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>栃木県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>茨城県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>山梨県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
      </div>
</div>`
});
// 中部
Vue.component('tyubu-component',{
    template:
    `<div class="stamp-container">
    <div class="center-stamp">
        <div class="triplog-post">
            <h2 class="trip-font"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 中部</h2>
            <h2 class="total-font">総投稿数数<span>~</span>件</h2>
        </div>
        <div class="region-post">
            <div class="tohoku-div">
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>新潟県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>富山県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tohoku-div">
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>石川県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>福井県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tohoku-div">
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>山梨県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>長野県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tohoku-div">
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>岐阜県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>静岡県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tohoku-div">
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>愛知県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
  </div>
</div>`
});
// 近畿
Vue.component('kinki-component',{
    template:
    `<div class="stamp-container">
    <div class="center-stamp">
        <div class="triplog-post">
            <h2 class="trip-font"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 近畿</h2>
            <h2 class="total-font">総投稿数数<span>~</span>件</h2>
        </div>
        <div class="region-post">
            <div class="tohoku-div">
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>三重県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>滋賀県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tohoku-div">
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>京都府</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>大阪府</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tohoku-div">
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>兵庫県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>奈良県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tohoku-div">
                <div class="div-flex">
                    <div class="region-div"> 
                        <div><img src="./images/trip-memory.svg"></div>
                        <div class="flex-colum">
                            <div>和歌山県</div>
                            <div><p>投稿数<span>~</span>件</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
  </div>
</div>`
});
// 中国・四国
Vue.component('shikoku-component',{
    template:
    `<div class="stamp-container">
        <div class="center-stamp">
            <div class="triplog-post">
                <h2 class="trip-font"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 中国・四国</h2>
                <h2 class="total-font">総投稿数数<span>~</span>件</h2>
            </div>
            <div class="region-post">
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>岡山県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>広島県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>鳥取県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>島根県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>山口県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>香川県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>徳島県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>愛媛県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>高知県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
      </div>
</div>`
});
// 九州・沖縄のやつ
Vue.component('kyushu-component',{
    template:
    `<div class="stamp-container">
        <div class="center-stamp">
            <div class="triplog-post">
                <h2 class="trip-font"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 九州</h2>
                <h2 class="total-font">総投稿数数<span>~</span>件</h2>
            </div>
            <div class="region-post">
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>福岡県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>佐賀県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>長崎県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>熊本県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>大分県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>宮崎県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tohoku-div">
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>鹿児島県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="div-flex">
                        <div class="region-div"> 
                            <div><img src="./images/trip-memory.svg"></div>
                            <div class="flex-colum">
                                <div>沖縄県</div>
                                <div><p>投稿数<span>~</span>件</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
      </div>
</div>`
});
const memory = new Vue({
    el:'#memory',
    data(){
        return{
            regionChange:false,
            isKyushu:false,
            isTohoku:false,
            isKanto:false,
            isTyubu:false,
            isKinki:false,
            isShikoku:false,
        };
    },
    methods:{
        tohokuChange(){
            this.regionChange = !this.regionChange;
            this.isTohoku = !this.isTohoku;
        },
        kantoChange(){
            this.regionChange = !this.regionChange;
            this.isKanto = !this.isKanto;
        },
        tyubuChange(){
            this.regionChange = !this.regionChange;
            this.isTyubu = !this.isTyubu;
        },
        kinkiChange(){
            this.regionChange = !this.regionChange;
            this.isKinki = !this.isKinki;
        },
        shikokuChange(){
            this.regionChange = !this.regionChange;
            this.isShikoku = !this.isShikoku;
        },
        kyushuChange(){
            this.regionChange = !this.regionChange;
            this.isKyushu = !this.isKyushu;
        }
    }
});