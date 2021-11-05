<template>
  <v-sheet class="background py-6 py-sm-16">
    <v-container>
      <div class="d-flex justify-center">
        <div class="text-center">
          <h2 class="text-h3 text-lg-h2">MENU</h2>
          <v-divider style="padding-top: 5px" class="quaternary" />
          <div class="text-subtitle-1 quaternary--text mt-1">メニュー</div>
        </div>
      </div>
      <v-row class="text-center ma-0 mt-3 mt-sm-6">
        <v-col v-for="(item, i) in features" :key="i" cols="12" sm="4" class="py-0 px-2 px-xl-3" :class="{'pt-3 pt-sm-0': i !== 0}">
          <v-img :src="item.image" :aspect-ratio="4/3"></v-img>
        </v-col>
      </v-row>
      <v-responsive max-width="900" class="text-center mx-auto mt-3 mt-sm-6">
        <div class="text-body-1 text-lg-h6">
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
        </div>
      </v-responsive>
      <div class="text-center">
        <v-btn class="quaternary white--text mt-3 mt-sm-6 px-8" link to="/menu" large tile>
          詳しく見る
        </v-btn>
      </div>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      features: [{
        image: '/images/card1-b0/meat.jpg'
      }, {
        image: '/images/card1-b0/pasta.jpg'
      }, {
        image: '/images/card1-b0/sweets.jpg'
      }]
    }
  }
}
</script>