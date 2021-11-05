<template>
  <v-sheet id="room" class="py-6 py-md-16">
    <v-container class="px-1 px-sm-3">
      <div class="text-center mx-3">
				<h2 style="letter-spacing: 4px !important; margin-left: 4px;" class="d-inline-flex text-h4 text-lg-h2 tertiary--text">ROOM</h2>
				<div class="font-weight-bold">客室</div>
      </div>
        <v-card
          v-for="(item, i) in features"
          :key="i"
          max-width="900"
          class="tertiary--text mx-auto mt-6 py-6 px-3 pa-sm-12"
        >
          <div class="black--text text-center text-sm-left">
            <div class="d-sm-flex justify-space-between align-center">
              <div class="text-h5 text-sm-h4 font-weight-bold">{{ item.type }}</div>
              <div class="text-h6 text-sm-h5 font-weight-bold textbase--text">
                <div style="line-height: 14px" class="text-caption text-sm-subtitle-1 font-weight-bold pt-1">
                  定員{{ item.capacity }}
                </div>
                {{ item.fee }}
              </div>
            </div>
            <v-divider color="tertiary" class="my-3 my-sm-6" />
            <div v-html="item.others" class="text-body-2 font-weight-bold tertiary--text d-flex justify-center" />
            <v-row class="justify-sm-center mx-auto mt-6 mb-0">
              <v-col
                v-for="(img, j) in item.thumb"
                :key="j"
                cols="6"
                class="py-0 px-1 text-center"
                :class="{ 'mt-2 mt-sm-0': j > 1 }"
              >
                <v-card tile flat @click="overlay_img = features[i].images[j]" class="pa-0"><v-img :src="img" :aspect-ratio="3/2"></v-img></v-card>
                <v-overlay
                  :value="overlay_img !== undefined"
                  opacity="0.4"
                  class="text-right"
                >
                  <v-responsive :max-width="$vuetify.breakpoint.lgAndUp ? '900' : '100vw'">
                    <v-btn text plain @click="overlay_img = undefined" height="auto" class="text-body-1 mr-1 pa-0"><v-icon dense >mdi-close</v-icon>CLOSE</v-btn>
                    <v-img :src="overlay_img" />
                  </v-responsive>
                </v-overlay>
              </v-col>
            </v-row>
            <div class="text-caption font-weight-bold grey-text text-center mt-2 mt-sm-3">※ 画像クリックで拡大</div>
          </div>
        </v-card>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      features: [{
        thumb: [
					'/images/feature9-a0/room1-1-thumb.jpg',
					'/images/feature9-a0/room1-2-thumb.jpg'
				],
        images: [
					'/images/feature9-a0/room1-1.jpg',
					'/images/feature9-a0/room1-2.jpg'],
				type: '101号室　ダブル',
				area: '〇〇㎡',
				capacity: '2名',
				fee: '￥8,800円',
				others: '＊追加分　1名につき4,400円（幼児無料）<br>＊年末年始、GW等は料金が変わることがございます。'
      }, {
        thumb: [
					'/images/feature9-a0/room2-1-thumb.jpg',
					'/images/feature9-a0/room2-2-thumb.jpg'
				],
        images: [
					'/images/feature9-a0/room2-1.jpg',
					'/images/feature9-a0/room2-2.jpg'
				],
				type: '102号室　ダブル',
				area: '〇〇㎡',
				capacity: '2名',
				fee: '￥8,800円',
				others: '＊追加分　1名につき4,400円（幼児無料）<br>＊年末年始、GW等は料金が変わることがございます。'
      }, {
        thumb: [
					'/images/feature9-a0/room3-1-thumb.jpg',
					'/images/feature9-a0/room3-2-thumb.jpg'
				],
        images: [
					'/images/feature9-a0/room3-1.jpg',
					'/images/feature9-a0/room3-2.jpg'
				],
				type: '103号室　ツイン',
				area: '〇〇㎡',
				capacity: '2名',
				fee: '￥8,800円',
				others: '＊追加分　1名につき4,400円（幼児無料）<br>＊年末年始、GW等は料金が変わることがございます。'
      }],
      overlay_img: undefined
    }
  },
  methods: {
    display_overlay (i, j) {
      this.overlay = this.features[i].images[j]
    }
  }
}
</script>