<template>
  <v-sheet id="news" class="background py-4 py-lg-8">
    <v-container>
      <v-responsive max-width="900" class="mx-auto mt-3">
        <!-- 記事を表示 -->
        <v-expansion-panels
          v-for="(n, i) in page === Math.ceil(news.length / 6) ? news.length % 6 : 6"
          :key="i"
          v-model="panel[i]"
          :id="'article' + i"
        >
          <v-expansion-panel
            class="text-center rounded-0 px-0 px-sm-6"
            :class="[{'mt-3': i !== 0}, panel[i] === 0 ? 'py-6' : 'py-1']"
          >
          <!-- 日付 -->
            <v-expansion-panel-header class="px-3">
              <v-row class="align-center ma-0 ml-3">
                <v-col cols="12" class="text-center pa-0">
                  <div width="120px" class="text-caption text-sm-subtitle-1 primary--text">{{ news[i + 6 * (page - 1)].date }}</div>
                </v-col>
                <v-col cols="12" class="text-center pa-0">
                  <div class="text-body-1 text-sm-h6">{{ news[i + 6 * (page - 1)].title }}</div>
                </v-col>
              </v-row>
            </v-expansion-panel-header>
            <!-- タイトル -->
            <v-expansion-panel-content>
              <v-divider class="mt-3" />
              <div class="text-caption text-sm-body-1 secondary--text mt-6 mx-0 mx-sm-12">{{ news[i + 6 * (page - 1)].text }}</div>
              <v-row class="justify-center ma-0 mt-6">
                <v-col
                  v-for="(img, j) in news[i + 6 * (page - 1)].images"
                  :key="j"
                  cols="12"
                  sm="4"
                  class="pa-1"
                >
                  <v-img :src="img" :aspect-ratio="4/3"></v-img>
                </v-col>
              </v-row>
            </v-expansion-panel-content>
          </v-expansion-panel>
        </v-expansion-panels>
        <div class="d-flex justify-center align-center mt-6">
          <v-btn
            @click="prev_page()"
            :disabled="page === 1 ? true : false"
            icon
            plain
            class="text-bory-1 mr-2"
          >
            <v-icon>mdi-chevron-left</v-icon>
          </v-btn>
          <div>
            <v-btn
              v-for="page_num in Math.ceil(news.length / 6)"
              :key="page_num"
              @click="page_switching(page_num)"
              icon
              :x-small="$vuetify.breakpoint.smAndUp ? false : true"
              :plain="page !== page_num ? true : false"
              class="text-caption text-sm-body-1 mx-1 mx-sm-2"
              :class="page === page_num ? 'secondary white--text' : 'secondary--text'"
            >
              {{ page_num }}
            </v-btn>
          </div>
          <v-btn
            @click="next_page()"
            :disabled="page === Math.ceil(news.length / 6) ? true : false"
            icon
            plain
            class="text-body-1 ml-2"
          >
            <v-icon class="ml-1">mdi-chevron-right</v-icon>
          </v-btn>
        </div>
      </v-responsive>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      page: 1,
      // panel: Array(6).fill(1),
      panel: [1,2,3,4,5,6],
      news: [{
        date: '2021-06-03',
        title: 'インフルエンザワクチン接種予約終了のお知らせ(0)',
        text: '今年度のインフルエンザワクチン接種は予約満了につき、ご予約の受付を締め切らせて頂きました。',
        images: ['/images/news2-a1/news-1.jpg']
      }, {
        date: '2021-06-03',
        title: 'ゴールデンウィーク期間の診療日について(1)',
        text: 'ゴールデンウィーク期間中も当院は通常通り診療致します。',
        images: ['/images/news2-a1/news-3.jpg']
      }, {
        date: '2021-05-30',
        title: '診療時間変更のお知らせ(2)',
        text: '本日、診療時間が午前のみと変更になりました。ご迷惑をおかけしますが、ご理解ご協力のほどよろしくお願い致します。',
        images: ['/images/news2-a1/news-3.jpg', '/images/news2-a0/news-2.jpg']
      },{
        date: '2021-06-03',
        title: 'インフルエンザワクチン接種予約終了のお知らせ(3)',
        text: '今年度のインフルエンザワクチン接種は予約満了につき、ご予約の受付を締め切らせて頂きました。',
        images: ['/images/news2-a1/news-1.jpg']
      }, {
        date: '2021-06-03',
        title: 'ゴールデンウィーク期間の診療日について(4)',
        text: 'ゴールデンウィーク期間中も当院は通常通り診療致します。',
        images: ['/images/news2-a1/news-3.jpg']
      }, {
        date: '2021-05-30',
        title: '診療時間変更のお知らせ(5)',
        text: '本日、診療時間が午前のみと変更になりました。ご迷惑をおかけしますが、ご理解ご協力のほどよろしくお願い致します。',
        images: ['/images/news2-a1/news-3.jpg', '/images/news2-a0/news-2.jpg']
      },{
        date: '2021-06-03',
        title: 'インフルエンザワクチン接種予約終了のお知らせ(6)',
        text: '今年度のインフルエンザワクチン接種は予約満了につき、ご予約の受付を締め切らせて頂きました。',
        images: ['/images/news2-a1/news-1.jpg']
      }, {
        date: '2021-06-03',
        title: 'ゴールデンウィーク期間の診療日について(7)',
        text: 'ゴールデンウィーク期間中も当院は通常通り診療致します。',
        images: ['/images/news2-a1/news-3.jpg']
      }, {
        date: '2021-05-30',
        title: '診療時間変更のお知らせ(8)',
        text: '本日、診療時間が午前のみと変更になりました。ご迷惑をおかけしますが、ご理解ご協力のほどよろしくお願い致します。',
        images: ['/images/news2-a1/news-3.jpg', '/images/news2-a0/news-2.jpg']
      },{
        date: '2021-06-03',
        title: 'インフルエンザワクチン接種予約終了のお知らせ(9)',
        text: '今年度のインフルエンザワクチン接種は予約満了につき、ご予約の受付を締め切らせて頂きました。',
        images: ['/images/news2-a1/news-1.jpg']
      }, {
        date: '2021-06-03',
        title: 'ゴールデンウィーク期間の診療日について(10)',
        text: 'ゴールデンウィーク期間中も当院は通常通り診療致します。',
        images: ['/images/news2-a1/news-3.jpg']
      }, {
        date: '2021-05-30',
        title: '診療時間変更のお知らせ(11)',
        text: '本日、診療時間が午前のみと変更になりました。ご迷惑をおかけしますが、ご理解ご協力のほどよろしくお願い致します。',
        images: ['/images/news2-a1/news-3.jpg', '/images/news2-a0/news-2.jpg']
      },{
        date: '2021-06-03',
        title: 'インフルエンザワクチン接種予約終了のお知らせ(12)',
        text: '今年度のインフルエンザワクチン接種は予約満了につき、ご予約の受付を締め切らせて頂きました。',
        images: ['/images/news2-a1/news-1.jpg']
      }, {
        date: '2021-06-03',
        title: 'ゴールデンウィーク期間の診療日について(13)',
        text: 'ゴールデンウィーク期間中も当院は通常通り診療致します。',
        images: ['/images/news2-a1/news-3.jpg']
      }, {
        date: '2021-05-30',
        title: '診療時間変更のお知らせ(14)',
        text: '本日、診療時間が午前のみと変更になりました。ご迷惑をおかけしますが、ご理解ご協力のほどよろしくお願い致します。',
        images: ['/images/news2-a1/news-3.jpg', '/images/news2-a0/news-2.jpg']
      }]
    }
  },
  created() {
    if(this.$route.query.number) {
      this.panel[this.$route.query.number] = 0
    }
  },
  mounted() {
    if(this.$route.query.number) {
      this.$vuetify.goTo('#article' + this.$route.query.number, { offset: -160 })
    }
  },
  methods: {
    // ページ数ボタン
    page_switching(num) {
      this.page = num
      this.panel.fill(null)
      window.scrollTo(0,0)
      this.$vuetify.goTo('#news')
    },
    // 次へボタン
    next_page() {
      this.page ++
      this.panel.fill(null)
      window.scrollTo(0,0)
      this.$vuetify.goTo('#news')
    },
    // 前へボタン
    prev_page() {
      this.page --
      this.panel.fill(null)
      window.scrollTo(0,0)
      this.$vuetify.goTo('#news')
    }
  }
}
</script>
