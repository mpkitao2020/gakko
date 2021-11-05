<template>
  <v-sheet class="white py-6 py-md-16">
    <v-container>
      <div class="d-flex justify-center">
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">PENSION</h2>
          <v-divider style="padding-top: 5px" class="my-auto tertiary" />
          <div class="text-body-2 font-weight-bold tertiary--text mt-1">宿泊</div>
        </div>
      </div>
      <v-row class="justify-center mt-6 mb-0">
        <v-col md="8" class="pa-0">
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
        <div class="text-body-1 text-lg-h6 font-weight-bold textbase--text">各部屋からゆったりウッドデッキや芝生でくつろいで日々の疲れをいやしてください。夏の夜の漁火もかなり素敵です。</div>
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
          src: '/images/carousel1-b0/carousel-1.jpg',
        },
        {
          src: '/images/carousel1-b0/carousel-2.jpg',
        },
        {
          src: '/images/carousel1-b0/carousel-3.jpg',
        },
        {
          src: '/images/carousel1-b0/carousel-4.jpg',
        },
        {
          src: '/images/carousel1-b0/carousel-5.jpg',
        }
      ]
    }
  }
}
</script>