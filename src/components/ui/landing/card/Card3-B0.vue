<template>
  <v-sheet class="background py-6 py-sm-16">
    <v-container>
      <div class="d-flex justify-center">
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">ABOUT</h2>
          <v-divider style="padding-top: 5px" class="my-auto senary" />
          <div class="text-subtitle-1 senary--text mt-1">店舗紹介</div>
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
        <h2 class="text-h5 text-lg-h4 font-weight-thin senary--text">落ち着いた空間で憩いのひと時を</h2>
        <div class="text-body-1 text-lg-h6 mt-1 mt-sm-3">
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
        </div>
      </v-responsive>
      <div class="text-center">
        <v-btn class="senary white--text mt-3 mt-sm-6 px-8" link to="/about" large tile>
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
        image: '/images/card3-b0/interior-1.jpg'
      }, {
        image: '/images/card3-b0/interior-2.jpg'
      }]
    }
  }
}
</script>