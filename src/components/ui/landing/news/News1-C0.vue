<template>
  <v-sheet class="background py-4 py-sm-8">
    <v-container>
      <div style="letter-spacing: 8px !important" class="text-subtitle-1 text-lg-h5 font-weight-regular text-center primary--text">お知らせ</div>
      <v-responsive max-width="900" class="mt-6 mx-auto">
        <v-divider />
        <v-list
          v-for="(item, i) in news"
          :key="i"
          color="transparent"
          class="pa-0"
        >
          <v-list-item link @click="movePage(i)" class="pa-0">
            <v-row justify="center" align="center" :style="[i === 2 ? '' : {'border-bottom': '1px dashed #e5e5e5'}]" class="w-full ma-0">
              <v-col cols="10" sm="11" class="px-0 pa-sm-2">
                <v-row align="center" class="d-block d-sm-flex ma-0">
                  <v-col cols="12" sm="3" class="text-body-2 font-weight-bold pa-0">{{ item.date }}</v-col>
                  <v-col cols="12" sm="8" offset-md="1" class="text-body-2 text-sm-body-1 text-md-body-1 text-truncate pa-0">{{ item.title }}</v-col>
                </v-row>
              </v-col>
              <v-col cols="1" class="text-right pa-0 pa-sm-2"><v-icon>mdi-chevron-right</v-icon></v-col>
            </v-row>
          </v-list-item>
        </v-list>
        <v-divider />
      </v-responsive>
      <div class="text-center">
        <v-btn link to="/news" large outlined class="text-caption text-lg-body-1 font-weight-thin primary--text px-8 mt-3 mt-sm-6">
          もっと見る
        </v-btn>
      </div>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      news: [{
        date: '2021-12-25',
        title: 'インフルエンザワクチン接種終了のお知らせ'
      }, {
        date: '2021-04-30',
        title: 'ゴールデンウィーク期間の診療日について'
      }, {
        date: '2021-06-03',
        title: '診療時間変更のお知らせ'
      }]
    }
  },
  methods: {
    movePage(num) {
      this.$router.push({ path: 'news', query: { number: num}})
    }
  }
}
</script>
