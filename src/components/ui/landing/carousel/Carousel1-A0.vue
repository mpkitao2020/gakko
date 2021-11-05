<template>
  <v-sheet class="background py-6 py-md-16">
    <v-container>
      <div class="d-flex">
        <v-divider class="my-3 tertiary" />
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">NEWS</h2>
          <div class="font-weight-bold body-2 tertiary--text">お知らせ</div>
        </div>
        <v-divider class="my-3 tertiary" />
      </div>
      <v-row class="justify-center mt-6 mb-0">
        <v-col md="8" class="py-0">
          <v-carousel cycle interval="3000" height="auto">
            <v-carousel-item
              v-for="(item,i) in carousel"
              :key="i"
            >
              <v-img :src="item.src" :aspect-ratio="16/9" />
            </v-carousel-item>
          </v-carousel>
        </v-col>
      </v-row>
      <v-responsive max-width="900" class="mx-auto text-center mt-6">
        <div class="text-body-1 text-lg-h6">
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
          ＜＜ダミーテキスト＞＞こちらに説明文が入ります。＜＜ダミーテキスト＞＞
        </div>
      </v-responsive>
      <div class="text-center">
        <v-btn class="px-8 mt-6 tertiary white--text" link to="/pension" large rounded>
          詳しく見る
        </v-btn>
      </div>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data () {
    return {
      carousel: [
        {
          src: '/images/carousel1-a0/carousel-1.jpg',
        },
        {
          src: '/images/carousel1-a0/carousel-2.jpg',
        },
        {
          src: '/images/carousel1-a0/carousel-3.jpg',
        },
        {
          src: '/images/carousel1-a0/carousel-4.jpg',
        },
        {
          src: '/images/carousel1-a0/carousel-5.jpg',
        }
      ]
    }
  }
}
</script>
