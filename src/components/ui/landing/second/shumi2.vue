<template>
  <v-sheet id="hobby" class="py-6 py-sm-16">
    <v-container class="px-2">
      <div class="d-flex">
        <v-divider class="my-5 my-md-3 senary" />
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">趣味</h2>
          <div class="font-weight-bold body-2 senary--text">Hobby</div>
        </div>
        <v-divider class="my-5 my-md-3 senary" />
      </div>
      <v-row max-width="900" class="mx-auto justify-center mt-6 mb-0">
        <v-col
          v-for="(item, i) in features"
          :key="i"
          cols="12"
          sm="6"
          xl="4"
          class="pa-2 px-md-3"
          :class="{'mt-3 mt-sm-6 mt-xl-0': i === 2, 'mt-3 mt-sm-0': i === 1}"
        >
          <v-card height="100%" class="senary--text text-center py-6 px-0 px-sm-3 px-md-6">
            <div class="h-full black--text">
              <v-carousel
                interval="3000"
                height="auto"
                light
                cycle
                :show-arrows="false"
              >
                <v-carousel-item
                  v-for="(img, j) in item.images"
                  :key="j"
                >
                  <v-img :src="img" :aspect-ratio="3/2" />
                </v-carousel-item>
              </v-carousel>
              <div class="text-body-1 text-sm-h6 text-lg-h4 font-weight-bold mt-lg-3 mt-2">{{ item.title }}</div>
              <div v-html="item.discription" class="text-caption text-lg-body-1 font-weight-bold senary--text mt-lg-3 mt-2" />
            </div>
          </v-card>
        </v-col>
      </v-row>
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
				images: ['/images/school/books.jpg','/images/school/person1.jpg'],
				title: '読書',
				discription: '水木しげるが大好きです。<br>ガイナーレ鳥取を応援しています。'
			}]
		}
	}
}
</script>