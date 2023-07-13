Vue.component("region-component", {
  template: ` <div class="stamp-container">
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
    </div>`,
});
// 北海道・東北
Vue.component("tohoku-component", {
  template: `
    <div>
    <div class="detail-container">
    <div class="detail">
        <div class="detail-left">
            <h3 class="detail-log"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 北海道・東北</h3>
            <div class="detail-circle">
                <div class="circle">
                    <p>次の<br>グレードまで<br><span>6</span>/<span>10</span></p>
                </div>
                <p class="circle-post">投稿数<span>~</span>件</p>
            </div>
            <div class="detail-liked"><p >いいね済み投稿<span>~</span>件</p></div>
        </div>
        <div class="detail-right">
            <img src="" class="detail-img" alt="">
        </div>
    </div>
</div>
<!-- 最近の投稿を表示する部分 -->
<div class="new-container">
    <div class="center-post">
        <div class="new-title-delete">
            <div class="new-post"><span>最新の投稿</span></div>
            <div class="post-delete"><span>投稿削除</span></div>
        </div>
        <div class="new-posts">
            <div class="post-card">
                <div class="post-type">旅行プラン</div>
                <div class="new-img"></div>
            </div>
            <div class="post-card">
                <div class="post-type">観光名所</div>
                <div class="new-img"></div>
            </div>
            <div class="post-card">
                <div class="post-type">飲食店</div>
                <div class="new-img"></div>
            </div>
        </div>
    </div>
</div>
    </div>`,
});
// 関東
Vue.component("kanto-component", {
  template: ` <div>
  <div class="detail-container">
  <div class="detail">
      <div class="detail-left">
          <h3 class="detail-log"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 関東</h3>
          <div class="detail-circle">
              <div class="circle">
                  <p>次の<br>グレードまで<br><span>6</span>/<span>10</span></p>
              </div>
              <p class="circle-post">投稿数<span>~</span>件</p>
          </div>
          <div class="detail-liked"><p >いいね済み投稿<span>~</span>件</p></div>
      </div>
      <div class="detail-right">
          <img src="" class="detail-img" alt="">
      </div>
  </div>
</div>
<!-- 最近の投稿を表示する部分 -->
<div class="new-container">
  <div class="center-post">
      <div class="new-title-delete">
          <div class="new-post"><span>最新の投稿</span></div>
          <div class="post-delete"><span>投稿削除</span></div>
      </div>
      <div class="new-posts">
          <div class="post-card">
              <div class="post-type">旅行プラン</div>
              <div class="new-img"></div>
          </div>
          <div class="post-card">
              <div class="post-type">観光名所</div>
              <div class="new-img"></div>
          </div>
          <div class="post-card">
              <div class="post-type">飲食店</div>
              <div class="new-img"></div>
          </div>
      </div>
  </div>
</div>
  </div>`,
});
// 中部
Vue.component("tyubu-component", {
  template: ` <div>
  <div class="detail-container">
  <div class="detail">
      <div class="detail-left">
          <h3 class="detail-log"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 中部</h3>
          <div class="detail-circle">
              <div class="circle">
                  <p>次の<br>グレードまで<br><span>6</span>/<span>10</span></p>
              </div>
              <p class="circle-post">投稿数<span>~</span>件</p>
          </div>
          <div class="detail-liked"><p >いいね済み投稿<span>~</span>件</p></div>
      </div>
      <div class="detail-right">
          <img src="" class="detail-img" alt="">
      </div>
  </div>
</div>
<!-- 最近の投稿を表示する部分 -->
<div class="new-container">
  <div class="center-post">
      <div class="new-title-delete">
          <div class="new-post"><span>最新の投稿</span></div>
          <div class="post-delete"><span>投稿削除</span></div>
      </div>
      <div class="new-posts">
          <div class="post-card">
              <div class="post-type">旅行プラン</div>
              <div class="new-img"></div>
          </div>
          <div class="post-card">
              <div class="post-type">観光名所</div>
              <div class="new-img"></div>
          </div>
          <div class="post-card">
              <div class="post-type">飲食店</div>
              <div class="new-img"></div>
          </div>
      </div>
  </div>
</div>
  </div>`,
});
// 近畿
Vue.component("kinki-component", {
  template: ` <div>
  <div class="detail-container">
  <div class="detail">
      <div class="detail-left">
          <h3 class="detail-log"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 近畿</h3>
          <div class="detail-circle">
              <div class="circle">
                  <p>次の<br>グレードまで<br><span>6</span>/<span>10</span></p>
              </div>
              <p class="circle-post">投稿数<span>~</span>件</p>
          </div>
          <div class="detail-liked"><p >いいね済み投稿<span>~</span>件</p></div>
      </div>
      <div class="detail-right">
          <img src="" class="detail-img" alt="">
      </div>
  </div>
</div>
<!-- 最近の投稿を表示する部分 -->
<div class="new-container">
  <div class="center-post">
      <div class="new-title-delete">
          <div class="new-post"><span>最新の投稿</span></div>
          <div class="post-delete"><span>投稿削除</span></div>
      </div>
      <div class="new-posts">
          <div class="post-card">
              <div class="post-type">旅行プラン</div>
              <div class="new-img"></div>
          </div>
          <div class="post-card">
              <div class="post-type">観光名所</div>
              <div class="new-img"></div>
          </div>
          <div class="post-card">
              <div class="post-type">飲食店</div>
              <div class="new-img"></div>
          </div>
      </div>
  </div>
</div>
  </div>`,
});
// 中国・四国
Vue.component("shikoku-component", {
  template: ` <div>
  <div class="detail-container">
  <div class="detail">
      <div class="detail-left">
          <h3 class="detail-log"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 中国・四国</h3>
          <div class="detail-circle">
              <div class="circle">
                  <p>次の<br>グレードまで<br><span>6</span>/<span>10</span></p>
              </div>
              <p class="circle-post">投稿数<span>~</span>件</p>
          </div>
          <div class="detail-liked"><p >いいね済み投稿<span>~</span>件</p></div>
      </div>
      <div class="detail-right">
          <img src="" class="detail-img" alt="">
      </div>
  </div>
</div>
<!-- 最近の投稿を表示する部分 -->
<div class="new-container">
  <div class="center-post">
      <div class="new-title-delete">
          <div class="new-post"><span>最新の投稿</span></div>
          <div class="post-delete"><span>投稿削除</span></div>
      </div>
      <div class="new-posts">
          <div class="post-card">
              <div class="post-type">旅行プラン</div>
              <div class="new-img"></div>
          </div>
          <div class="post-card">
              <div class="post-type">観光名所</div>
              <div class="new-img"></div>
          </div>
          <div class="post-card">
              <div class="post-type">飲食店</div>
              <div class="new-img"></div>
          </div>
      </div>
  </div>
</div>
  </div>`,
});
// 九州・沖縄のやつ
Vue.component("kyushu-component", {
  template: ` <div>
  <div class="detail-container">
  <div class="detail">
      <div class="detail-left">
          <h3 class="detail-log"><span class="back-span" onclick="location.href='./stamp-region.php'">Trip Log</span> - 九州・沖縄</h3>
          <div class="detail-circle">
              <div class="circle">
                  <p>次の<br>グレードまで<br><span>6</span>/<span>10</span></p>
              </div>
              <p class="circle-post">投稿数<span>~</span>件</p>
          </div>
          <div class="detail-liked"><p >いいね済み投稿<span>~</span>件</p></div>
      </div>
      <div class="detail-right">
          <img src="" class="detail-img" alt="">
      </div>
  </div>
</div>
<!-- 最近の投稿を表示する部分 -->
<div class="new-container">
  <div class="center-post">
      <div class="new-title-delete">
          <div class="new-post"><span>最新の投稿</span></div>
          <div class="post-delete"><span>投稿削除</span></div>
      </div>
      <div class="new-posts">
          <div class="post-card">
              <div class="post-type">旅行プラン</div>
              <div class="new-img"></div>
          </div>
          <div class="post-card">
              <div class="post-type">観光名所</div>
              <div class="new-img"></div>
          </div>
          <div class="post-card">
              <div class="post-type">飲食店</div>
              <div class="new-img"></div>
          </div>
      </div>
  </div>
</div>
  </div>`,
});
const memory = new Vue({
  el: "#memory",
  data() {
    return {
      regionChange: false,
      isKyushu: false,
      isTohoku: false,
      isKanto: false,
      isTyubu: false,
      isKinki: false,
      isShikoku: false,
    };
  },
  methods: {
    tohokuChange() {
      this.regionChange = !this.regionChange;
      this.isTohoku = !this.isTohoku;
    },
    kantoChange() {
      this.regionChange = !this.regionChange;
      this.isKanto = !this.isKanto;
    },
    tyubuChange() {
      this.regionChange = !this.regionChange;
      this.isTyubu = !this.isTyubu;
    },
    kinkiChange() {
      this.regionChange = !this.regionChange;
      this.isKinki = !this.isKinki;
    },
    shikokuChange() {
      this.regionChange = !this.regionChange;
      this.isShikoku = !this.isShikoku;
    },
    kyushuChange() {
      this.regionChange = !this.regionChange;
      this.isKyushu = !this.isKyushu;
    },
  },
});
{
  /* <div class="stamp-container">
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
</div> */
}
