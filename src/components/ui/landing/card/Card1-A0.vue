<template>
  <v-sheet class="background py-6 py-md-16">
    <v-container>
      <div class="d-flex">
        <v-divider class="my-auto quinary" />
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">MENU</h2>
          <div class="font-weight-bold body-2 quinary--text">メニュー</div>
        </div>
        <v-divider class="my-auto quinary" />
      </div>
      <v-row max-width="900" class="mx-auto text-center mt-3 mb-0">
        <v-col v-for="(item, i) in features" :key="i" cols="12" md="4">
          <v-img :src="item.image" height="100%"></v-img>
        </v-col>
      </v-row>
      <v-responsive max-width="900" class="mx-auto text-center mt-3">
        <div class="text-body-1 text-lg-h6">
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
        </div>
      </v-responsive>
      <div class="text-center">
        <v-btn class="px-8 mt-5 quinary white--text" link to="/contact" large rounded>
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
        image: '/images/card1-a0/meat.jpg'
      }, {
        image: '/images/card1-a0/pasta.jpg'
      }, {
        image: '/images/card1-a0/sweets.jpg'
      }]
    }
  }
}
</script>