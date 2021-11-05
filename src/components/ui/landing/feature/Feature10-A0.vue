<template>
  <v-sheet id="sightseeing" class="bg py-6 py-md-16">
    <v-container class="px-0 px-sm-3">
      <div
        v-for="(item, i) in features"
        :key="i"
        class="d-flex flex-column flex-md-row mt-16 ss-list"
      >
        <div class="w-full w-md-half my-auto" :class="[ i % 2 ? 'order-md-last' : 'order-first' ]">
          <v-img
            v-if="item.images.length === 1"
            :src="item.images[0]"
            :aspect-ratio="3/2"
          />
          <v-carousel v-else interval="3000" height="auto" light cycle >
            <v-carousel-item
              v-for="(img, j) in item.images"
              :key="j"
            >
              <v-img :src="img" :aspect-ratio="3/2" contain />
            </v-carousel-item>
          </v-carousel>
        </div>
        <div class="w-full w-md-half d-flex align-center">
          <div class="pa-3 pa-md-6 pa-lg-12">
            <div class="text-h6 text-lg-h4 font-weight-bold senary--text mt-6 mt-md-0">{{ item.title }}</div>
            <div class="text-overline font-weight-bold senary--text">{{ item.en_char }}</div>
            <div class="text-body-1 text-lg-h6 font-weight-bold textbase--text mt-3">{{ item.text }}</div>
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
        images: ['/images/feature10-a0/beacon.jpg'],
        title: '魚見台',
        en_char: 'uomidai',
				text: '昔イワシの大群が押し寄せてきたときに、ここから老漁夫が大声で指示を出した事から（魚見台）となずけられました。眼下には美しい日本海が広がり鳥取砂丘も一望できます。手前には龍見台という展望台もあります。'
      },{
        images: ['/images/feature10-a0/garden.jpg', '/images/feature10-a0/park.jpg', '/images/feature10-a0/sea.jpg'],
        title: '白兎海岸 / 白兎神社',
        en_char: 'hakuto coast / hakuto shrine',
				text: '因幡の白うさぎの神話や縁結びの神社として有名な所です。少し海岸沿いを歩くと恋人の聖地　白兎の丘というロマンティックな場所もあります。'
      },{
        images: ['/images/feature10-a0/street.jpg'],
        title: '浜村温泉 / 宝木温泉 / 吉岡温泉 / 鹿野温泉',
        en_char: 'hamamura onsen / hougi onsen / yoshioka onsen / shikano onsen',
				text: '鳥取には沢山の温泉が有ります。ゆっくり足湯や日帰り温泉巡りもいいですね。'
      }]
    }
  }
}
</script>

<style scoped>
.ss-list:first-child {
  margin-top: 0 !important;
}
</style>