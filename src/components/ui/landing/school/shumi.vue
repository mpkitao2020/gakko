<template>
  <v-sheet id="hobby" class="background py-6 py-sm-16">
    <v-container class="px-0 px-sm-3">
      <div class="text-center mx-3">
				<h2 style="letter-spacing: 4px !important; margin-left: 4px;" class="d-inline-flex text-h4 text-lg-h3">趣味</h2>
				<div class="text-body-2 font-weight-bold tertiary--text">Hobby</div>
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
          <v-card height="100%" class="tertiary--text text-center py-6 px-3 px-md-6">
            <div class="h-full black--text">
              <v-img :src="item.image" :aspect-ratio="3/2" class="rounded-0 my-0" />
              <div class="text-body-1 text-sm-h6 text-lg-h4 font-weight-bold mt-lg-3 mt-2">{{ item.title }}</div>
              <div v-html="item.discription" class="text-caption text-lg-body-1 font-weight-bold tertiary--text mt-lg-3 mt-2" />
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
				image: '/images/school/soccer2.jpg',
				title: 'サッカー',
        discription: '毎日、放課後に遊んでいます。<br>ガイナーレ鳥取を応援しています。'
			}, {
				image: '/images/school/game.jpg',
				title: 'ゲーム',
				discription: '休日は、一日中テレビの前にいます。<br>ガイナーレ鳥取を応援しています。'
			}, {
				image: '/images/school/books.jpg',
				title: '読書',
				discription: '水木しげるが大好きです。<br>ガイナーレ鳥取を応援しています。'
			}]
		}
	}
}
</script>