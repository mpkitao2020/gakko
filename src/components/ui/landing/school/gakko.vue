<template>
  <v-sheet class="py-6 py-sm-16">
    <v-container class="px-0 px-sm-3">
      <div class="d-flex justify-center">
        <div class="text-center mx-3">
          <h2 class="text-h4 text-lg-h3">マジックプラス</h2>
          <v-divider style="padding-top: 4px" class="my-auto tertiary" />
          <div class="text-body-2 font-weight-bold tertiary--text mt-1">Magic Plus</div>
        </div>
      </div>
      <v-responsive max-width="900" class="mx-auto text-left mt-3">
        <div class="justify-center mt-6">
          <div md="8" class="pa-0" width="100vw">
            <v-img src="/images/school/magicplus.jpg" :aspect-ratio="3/2" contain />
          </div>
        </div>
        <!-- <v-responsive max-width="900" class="mx-auto text-left mt-6"> -->
        <div
          class="text-body-1 text-lg-h6 mx-2 mx-sm-auto mt-3 mt-sm-6 mx-sm-0 font-weight-bold tertiary--text text-center"
        >
          海外では優秀な一流エンジニアは「Wizard」と呼ばれ高い地位を持ち、大変尊敬されています。
          <br />そのウィザード達は大げさでなく世界を変えるシステムを今も作り続けています。
          <br />エンジニア全員が「Wizard（魔法使い）」となり、その技術である「Magic（魔法）」を色々なものに「Plus（付与）」して日々の生活を豊かにできる。
          <br />そんな高いレベルの技術者集団を目指して、株式会社MagicPlusは日々魔法の研究・開発に勤しんでいます。
        </div>
        <v-simple-table
          class="w-full w-md-half text-body-1 text-lg-h6 mt-3 mt-sm-6 mx-2 mx-sm-auto"
        >
          <tbody>
            <tr v-for="item in question" :key="item.theme">
              <td>{{ item.theme }}</td>
              <td>{{ item.answer }}</td>
            </tr>
          </tbody>
        </v-simple-table>
      </v-responsive>
      <div class="d-flex flex-column flex-sm-row justify-space-around text-center mx-4">
        <v-btn
          @click="$vuetify.goTo('#hobby');"
          large
          rounded
          class="white--text px-8 mt-5"
          elevation="0"
          style="background-color: #7591d2;"
        >趣味</v-btn>
        <v-btn
          @click="$vuetify.goTo('#skills');"
          large
          rounded
          class="white--text px-8 mt-5"
          elevation="0"
          style="background-color: #7591d2;"
        >特技</v-btn>
        <v-btn
          @click="$vuetify.goTo('#history');"
          large
          rounded
          class="white--text px-8 mt-5"
          elevation="0"
          style="background-color: #7591d2;"
        >歴史</v-btn>
        <v-btn
          @click="$vuetify.goTo('#personality');"
          large
          rounded
          class="white--text px-8 mt-5"
          elevation="0"
          style="background-color: #7591d2;"
        >性格</v-btn>
      </div>
      <div class="text-center">
        <v-btn
          href="http://magic-plus.net/"
          elevation="0"
          outlined
          class="tertiary white--text px-8 mt-5"
        >
          Magic Plus
          <v-icon aria-hidden="false">mdi-chevron-right</v-icon>
        </v-btn>
      </div>
    </v-container>
  </v-sheet>
</template>
<script>
export default {
  data() {
    return {
      question: [
        {
          theme: "生年月日",
          answer: "2014年04月01日"
        },
        {
          theme: "星座",
          answer: "おひつじ座"
        },
        {
          theme: "学校名",
          answer: "株式会社 Magic Plus"
        },
        {
          theme: "好きな教科",
          answer: "国語・ゲーム"
        },
        {
          theme: "好きな食べ物",
          answer: "焼き肉・ラーメン"
        }
      ]
    };
  }
};
</script>