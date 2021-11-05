<template>
  <v-sheet color="transparent">
    <v-container class="py-4 py-lg-8">
      <div class="text-center">
        <div class="text-uppercase font-weight-bold body-2 primary--text mb-2">Employee</div>
        <h2 class="text-h3 text-lg-h2">
          社員
        </h2>
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
          sm="6"
          lg="3"
          class="text-center"
        >
          <v-card to="#">
            <v-img :src="item.image" height="340" position="center 30%"></v-img>
            <div class="pa-3">
              <div class="text-h5">{{ item.name }}</div>
              <div class="text-h6 secondary--text">{{ item.title }}</div>
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
        title: 'ディレクター',
        image: require('static/images/member/1.jpg'),
        twitter: '#',
        github: '#',
        linkedin: '#'
      }, {
        name: '小嶋 裕貴',
        title: 'コーダー',
        image: require('static/images/member/2.jpg'),
        twitter: '#',
        github: '#',
        linkedin: '#'
      }, {
        name: '中村 大輔',
        title: 'ディレクター',
        image: require('static/images/member/3.jpg'),
        twitter: '#',
        github: '#',
        linkedin: '#'
      }, {
        name: '中村 裕貴',
        title: 'デザイナー',
        image: require('static/images/member/4.jpg'),
        twitter: '#',
        github: '#',
        linkedin: '#'
      }]
    }
  }
}
</script>
