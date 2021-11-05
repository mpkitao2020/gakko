<template>
  <v-sheet class="py-6 py-sm-16 background">
    <v-container>
      <div class="d-flex justify-center">
        <div class="text-center">
          <h2 class="text-h3 font-weight-bold text-lg-h1">NEWS</h2>
          <div class="text-body-2 font-weight-thin primary--text text--lighten-4">ニュース</div>
        </div>
      </div>
      <v-responsive max-width="900px" class="text-center mt-3 mt-sm-6 mx-auto">
        <v-list
          v-for="(item, i) in news"
          :key="i"
          color="transparent"
          class="py-0"
        >
          <v-divider v-if="i" />
          <v-list-item link to="/news#news">
            <v-row class="w-full align-center ma-0">
              <v-col cols="10" sm="3" md="2" class="text-subtitle-1 font-weight-bold text-left pr-0 pr-md-3 pb-0 pb-sm-3">{{ item.date }}</v-col>
              <v-col cols="10" sm="7" md="7" offset-md="1" class="text-body-2 text-sm-body-1 text-md-h6 text-truncate text-left pt-0 pt-sm-3">{{ item.title }}</v-col>
              <v-col cols="2" class="text-right px-0 px-sm-3 pt-0 pt-sm-3"><v-icon>mdi-chevron-right</v-icon></v-col>
            </v-row>
          </v-list-item>
        </v-list>
      </v-responsive>
      <div class="text-center">
        <v-btn link to="/news" large tile color="primary" class="px-8 mt-3 mt-sm-6">
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
        date: '2021-03-25',
        title: '春季メニュー解禁！'
      }, {
        date: '2021-05-30',
        title: '営業時間変更のお知らせ'
      }, {
        date: '2021-06-03',
        title: 'テイクアウト始めました'
      }]
    }
  }
}
</script>
