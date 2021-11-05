<template>
  <v-sheet>
    <v-container class="py-4 py-lg-8">
      <div class="text-center">
        <div class="text-overline secondary--text mb-3">Voice of senior employees</div>
        <h2 class="text-h3 text-lg-h2">先輩社員の声</h2>
        <v-responsive max-width="1200" class="mx-auto">
          <div class="text-h6 text-lg-h5 mt-4">
            海外では優秀な一流エンジニアは「Wizard」と呼ばれ高い地位を持ち、大変尊敬されています。そのウィザード達は大げさでなく世界を変えるシステムを今も作り続けています。エンジニア全員が「Wizard（魔法使い）」となり、その技術である「Magic（魔法）」を色々なものに「Plus（付与）」して日々の生活を豊かにできる。そんな高いレベルの技術者集団を目指して、株式会社MagicPlusは日々魔法の研究・開発に勤しんでいます。
          </div>
        </v-responsive>
      </div>
      <v-row class="mt-6">
        <v-col
          v-for="(item, i) in team"
          :key="i"
          cols="12"
          lg="6"
        >
          <v-card class="overflow-hidden">
            <div class="d-flex flex-column flex-sm-row align-center">
              <div class="mr-sm-3 w-full w-sm-auto">
                <v-img :src="item.image" height="280" :width="$vuetify.breakpoint.smAndUp ? 200 : undefined" position="center 30%"></v-img>
              </div>
              <div class="pa-2">
                <div class="text-h5 mt-3">{{ item.name }}</div>
                <div class="text-h6 secondary--text">{{ item.title }}</div>
                <div class="text-body-1 text--lighten-2 my-1">
                  {{ item.text }}
                </div>
              </div>
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
      team: [{
        name: '清水 優',
        title: 'デザイナー',
        image: require('static/images/member/1.jpg'),
        text: '私は優秀はエンジニアを目指しています！...'
      }, {
        name: '小嶋 裕貴',
        title: 'コーダー',
        image: require('static/images/member/2.jpg'),
        text: '私は優秀はエンジニアを目指しています！...'
      }, {
        name: '中村 大輔',
        title: 'デザイナー',
        image: require('static/images/member/3.jpg'),
        text: '私は優秀はエンジニアを目指しています！...'
      }, {
        name: '中村 裕貴',
        title: 'ディレクター',
        image: require('static/images/member/4.jpg'),
        text: '私は優秀はエンジニアを目指しています！...'
      }]
    }
  }
}
</script>
