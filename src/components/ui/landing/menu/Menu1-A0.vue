<template>
  <v-sheet class="py-6 py-sm-16 background">
    <v-expansion-panels v-model="lunch">
      <v-expansion-panel :class="[lunch === 0 ? 'py-6 py-sm-16' : 'py-3']">
        <v-container>
          <v-expansion-panel-header class="d-flex">
            <div class="text-left">
              <div class="text-subtitle-1 font-weight-bold quaternary--text">ランチ</div>
              <h2 class="text-h3 text-lg-h1 mt-2">LUNCH</h2>
            </div>
          </v-expansion-panel-header>
          <v-expansion-panel-content>
            <v-row class="mt-6 justify-center">
              <v-col
                v-for="(item, i) in lunch_menu"
                :key="i"
                cols="12"
                sm="6"
                lg="4"
                xl="3"
                class="text-center"
              >
                <div>
                  <v-img :src="item.image" :aspect-ratio="4/5" position="center 30%" class="elevation-2"></v-img>
                  <v-sheet class="pa-3 mx-2 mt-n6 position-relative" elevation="2">
                    <div v-html="item.name" class="text-h6 font-weight-bold" />
                    <div class="text-subtitle-1 secondary--text">￥{{ item.price }}（税込）</div>
                  </v-sheet>
                </div>
              </v-col>
            </v-row>
          </v-expansion-panel-content>
        </v-container>
      </v-expansion-panel>
    </v-expansion-panels>
    <v-expansion-panels v-model="dinner">
      <v-expansion-panel :class="[dinner === 0 ? 'py-6 py-sm-16' : 'py-3']">
        <v-container>
          <v-expansion-panel-header class="d-flex">
            <div class="text-left">
              <div class="text-subtitle-1 font-weight-bold quaternary--text">ディナー</div>
              <h2 class="text-h3 text-lg-h1 mt-2">DINNER</h2>
            </div>
          </v-expansion-panel-header>
          <v-expansion-panel-content>
            <v-row class="mt-6 justify-center">
              <v-col
                v-for="(item, i) in dinner_menu"
                :key="i"
                cols="12"
                sm="6"
                lg="4"
                xl="3"
                class="text-center"
              >
                <div>
                  <v-img :src="item.image" :aspect-ratio="4/5" position="center 30%" class="elevation-2"></v-img>
                  <v-sheet class="pa-3 mx-2 mt-n6 position-relative" elevation="2">
                    <div v-html="item.name" class="text-h6 font-weight-bold" />
                    <div class="text-subtitle-1 secondary--text">￥{{ item.price }}（税込）</div>
                  </v-sheet>
                </div>
              </v-col>
            </v-row>
          </v-expansion-panel-content>
        </v-container>
      </v-expansion-panel>
    </v-expansion-panels>
    <v-expansion-panels v-model="dessert">
      <v-expansion-panel :class="[dessert === 0 ? 'py-6 py-sm-16' : 'py-3']">
        <v-container>
          <v-expansion-panel-header class="d-flex">
            <div class="text-left">
              <div class="text-subtitle-1 font-weight-bold quaternary--text">デザート</div>
              <h2 class="text-h3 text-lg-h1 mt-2">DESSERT</h2>
            </div>
          </v-expansion-panel-header>
          <v-expansion-panel-content>
            <v-row class="mt-6 justify-center">
              <v-col
                v-for="(item, i) in dessert_menu"
                :key="i"
                cols="12"
                sm="6"
                lg="4"
                xl="3"
                class="text-center"
              >
                <div>
                  <v-img :src="item.image" :aspect-ratio="4/5" position="center 30%" class="elevation-2"></v-img>
                  <v-sheet class="pa-3 mx-2 mt-n6 position-relative" elevation="2">
                    <div v-html="item.name" class="text-h6 font-weight-bold" />
                    <div class="text-subtitle-1 secondary--text">￥{{ item.price }}（税込）</div>
                  </v-sheet>
                </div>
              </v-col>
            </v-row>
          </v-expansion-panel-content>
        </v-container>
      </v-expansion-panel>
    </v-expansion-panels>
    <!-- <v-container>
      <div class="text-left">
        <div class="text-subtitle-1 font-weight-bold quaternary--text">ディナー</div>
        <h2 class="text-h3 text-lg-h1 mt-2">DINNER</h2>
      </div>
      <v-row class="mt-6 justify-center">
        <v-col
          v-for="(item, i) in dinner_menu"
          :key="i"
          cols="12"
          sm="6"
          lg="4"
          xl="3"
          class="text-center"
        >
          <div>
            <v-img :src="item.image" :aspect-ratio="4/5" position="center 30%" class="elevation-2"></v-img>
            <v-sheet class="pa-3 mx-2 mt-n6 position-relative" elevation="2">
              <div v-html="item.name" class="text-h6 font-weight-bold" />
              <div class="text-subtitle-1 secondary--text">￥{{ item.price }}（税込）</div>
            </v-sheet>
          </div>
        </v-col>
      </v-row>
    </v-container> -->
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      lunch: undefined,
      dinner: undefined,
      dessert: undefined,
      lunch_menu: [{
          name: '絶品オムライス',
          price: '800',
          image: '/images/menu1-a0/lunch-1.jpg'
        }, {
          name: 'たっぷりチーズハンバーグ',
          price: '830',
          image: '/images/menu1-a0/lunch-2.jpg'
        }, {
          name: 'ヤングコーンとおくらの<br>バジルソースパスタ',
          price: '720',
          image: '/images/menu1-a0/lunch-3.jpg'
      }],
      dinner_menu: [{
          name: 'ベーコン入りシーザーサラダ',
          price: '380',
          image: '/images/menu1-a0/dinner-1.jpg'
        }, {
          name: 'ほかほかクラムチャウダー',
          price: '400',
          image: '/images/menu1-a0/dinner-2.jpg'
        }, {
          name: 'マルゲリータ（24cm）',
          price: '650',
          image: '/images/menu1-a0/dinner-3.jpg'
        }, {
          name: 'エビとトマトのパスタ',
          price: '780',
          image: '/images/menu1-a0/dinner-4.jpg'
        }, {
          name: 'チキンステーキ旬野菜添え',
          price: '920',
          image: '/images/menu1-a0/dinner-5.jpg'
      }],
      dessert_menu: [{
          name: '抹茶バウム',
          price: '480',
          image: '/images/menu1-a0/dessert-1.jpg'
        },{
          name: '紅茶のシフォンケーキ',
          price: '450',
          image: '/images/menu1-a0/dessert-2.jpg'
        },{
          name: 'チョコバナナパンケーキ',
          price: '540',
          image: '/images/menu1-a0/dessert-3.jpg'
        },{
          name: 'パンケーキとリンゴの<br>キャラメリゼ',
          price: '600',
          image: '/images/menu1-a0/dessert-4.jpg'
      }]
    }
  }
}
</script>
