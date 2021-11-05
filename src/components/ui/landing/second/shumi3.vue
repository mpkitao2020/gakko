<template>
  <v-sheet id="hobby" class="background py-6 py-sm-16">
    <v-container class="px-2">
      <div class="d-flex">
        <v-divider class="my-5 my-md-3 senary" />
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">趣味</h2>
          <div class="font-weight-bold body-2 senary--text">Hobby</div>
        </div>
        <v-divider class="my-5 my-md-3 senary" />
      </div>
      <div
        v-for="(item, i) in features"
        :key="i"
        class="d-flex flex-column flex-md-row mt-6 ss-list"
      >
        <div class="w-full w-md-half my-auto" :class="[ i % 2 ? 'order-md-last' : 'order-first' ]">
          <v-img
            v-if="item.images.length === 1"
            :src="item.images[0]"
            :aspect-ratio="3/2"
          />
          <v-carousel v-else interval="3000" height="auto" light cycle :show-arrows="false">
            <v-carousel-item
              v-for="(img, j) in item.images"
              :key="j"
            >
              <v-img :src="img" :aspect-ratio="3/2" contain />
            </v-carousel-item>
          </v-carousel>
        </div>
        <div class="w-full w-md-half d-flex align-center">
          <div class="px-3 py-0 pa-md-6 pa-lg-12">
            <div class="text-h6 text-lg-h4 font-weight-bold senary--text mt-3 mt-md-0">{{ item.title }}</div>
            <div v-html="item.discription" class="text-body-1 text-lg-h6 font-weight-bold textbase--text mt-3" />
          </div>
        </div>
      </div>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      features: [{
				images: ['/images/school/soccer2.jpg','/images/school/soccer1.jpg'],
				title: 'サッカー',
        discription: '毎日、放課後に遊んでいます。<br>ガイナーレ鳥取を応援しています。'
			}, {
				images: ['/images/school/game.jpg','/images/school/person2.jpg'],
				title: 'ゲーム',
				discription: '休日は、一日中テレビの前にいます。<br>ガイナーレ鳥取を応援しています。'
			}, {
				images: ['/images/school/books.jpg',],
				title: '読書',
				discription: '水木しげるが大好きです。<br>ガイナーレ鳥取を応援しています。'
			}],
    }
  }
}
</script>

<style scoped>
.ss-list:first-child {
  margin-top: 0 !important;
}
</style>