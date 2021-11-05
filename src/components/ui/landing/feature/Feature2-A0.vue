<template>
  <v-sheet class="background py-6 py-sm-16">
    <v-container>
      <div
        v-for="(item, i) in features"
        :key="i"
        class="d-flex flex-column flex-sm-row align-center"
        :class="{'mt-8 mt-sm-16': i !== 0}"
      >
        <div class="w-full w-sm-half mt-3 mt-sm-0 order-2 my-auto" :class="{'order-sm-1': i%2 === 0}">
          <v-img
            :src="item.image"
            :aspect-ratio="4/3"
            alt=""
          />
        </div>
        <div class="w-full w-sm-half order-1 px-sm-6 px-md-0" :class="[i % 2 === 0 ? 'order-sm-2 pl-md-12': 'pr-md-12']">
          <div class="text-h5 text-lg-h4 font-weight-bold quinary--text mt-3 mt-sm-0">{{ item.title + i}}</div>
          <div class="text-h6 text-lg-h5 font-weight-bold text-right blue-grey--text text--darken-4">お一人様<span class="ml-2">{{ item.price }} 円</span></div>
          <div class="text-h6 text-lg-h5 mt-3">{{ item.text }}</div>
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
        image: '/images/feature2-a0/cource.jpg',
        title: 'おまかせ8品コース',
        price: '3500',
				text: '＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞'
      },{
        image: '/images/feature2-a0/cource.jpg',
        title: 'こだわり13品コース',
        price: '4500',
				text: '＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞'
      },{
        image: '/images/feature2-a0/cource.jpg',
        title: 'ウェディングプラン',
        price: '5500',
				text: '＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞'
      }]
    }
  }
}
</script>
