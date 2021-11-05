<template>
  <v-sheet class="white py-6 py-sm-16">
    <v-container>
      <div class="d-flex justify-center">
        <div class="text-center">
          <h2 class="text-h3 font-weight-bold text-lg-h1">ABOUT</h2>
          <div class="text-body-2 font-weight-thin primary--text text--lighten-4">店舗紹介</div>
        </div>
      </div>
      <v-row max-width="900" class="text-center ma-0 mx-auto mt-3 mt-sm-6">
        <v-col v-for="(item, i) in features" :key="i" cols="12" sm="6" class="py-0 px-2 px-xl-3" :class="{'pt-3 pt-sm-0': i !== 0}">
          <v-card tile>
            <v-img :src="item.image" height="100%"></v-img>
          </v-card>
        </v-col>
      </v-row>
      <v-responsive max-width="900" class="text-center mx-auto mt-3 mt-sm-6">
        <h2 class="text-h5 text-lg-h4 font-weight-thin">落ち着いた空間で憩いのひと時を</h2>
        <div class="text-body-1 text-lg-h6 mt-1 mt-sm-3">
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
        </div>
      </v-responsive>
      <div class="text-center">
        <v-btn link to="/about" large tile color="primary" class="mt-3 mt-sm-6 px-8">
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
        image: '/images/card3-c0/interior-1.jpg'
      }, {
        image: '/images/card3-c0/interior-2.jpg'
      }]
    }
  }
}
</script>