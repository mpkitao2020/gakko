<template>
  <v-sheet  class="py-6 py-sm-16">
    <v-container class="px-2">
      <div class="d-flex justify-center">
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">マジプラ</h2>
          <v-divider style="padding-top: 5px" class="my-auto senary" />
          <div class="text-body-2 font-weight-bold senary--text mt-1">MP</div>
        </div>
      </div>
      <v-responsive max-width="900" class="mx-auto text-center mt-3">
        <div class="justify-center mt-6">
          <div class="pa-0" width="100vw">
            <v-img
              src="/images/school/magicplus.jpg"
              :aspect-ratio="3/2"
              contain
            />
          </div>
        </div>
        <div class="text-body-1 text-lg-h6 mx-sm-auto mt-3 mt-sm-6 mx-0 mx-sm-2 font-weight-bold senary--text text-center">
          海外では優秀な一流エンジニアは「Wizard」と呼ばれ高い地位を持ち、大変尊敬されています。<br>そのウィザード達は大げさでなく世界を変えるシステムを今も作り続けています。<br>エンジニア全員が「Wizard（魔法使い）」となり、その技術である「Magic（魔法）」を色々なものに「Plus（付与）」して日々の生活を豊かにできる。<br>そんな高いレベルの技術者集団を目指して、株式会社MagicPlusは日々魔法の研究・開発に勤しんでいます。
        </div>
        <!-- <div class="d-flex flex-column d-inline-flex flex-sm-row mt-6"> -->
          <v-row
            class="ma-0 mt-3"
            justify="center"
            align="center"
          >
            <v-col
              v-for="( item, i) in btn_items "
              :key= "i"
              col="5"
              sm="3"
              md="2"
              class="pa-0 ma-1"
            >
              <v-btn
                @click="$vuetify.goTo(item.to);"
                large
                rounded
                outlined
                color="tertiary"
                class="px-8 px-sm-4"
                style="letter-spacing: 4px"
              >
                {{ item.ja }}
              </v-btn>
            </v-col>
          </v-row>
          <!-- <v-btn
            v-for="( item, i) in btn_items "
            :key= "i"
            @click="$vuetify.goTo(item.to);"
            large
            rounded
            outlined
            color="tertiary"
            class="px-8 px-sm-4 ma-1"
            style="letter-spacing: 4px"
          >
            {{ item.ja }}
          </v-btn>-->
        <!-- </div> -->
      </v-responsive>
    </v-container>
  </v-sheet>
</template>
<script>
  export default {
    data () {
      return {
        question: [
          {
            theme: '生年月日',
            answer: '2014年04月01日',
          },
          {
            theme: '星座',
            answer: 'おひつじ座',
          },
          {
            theme: '学校名',
            answer: '株式会社 Magic Plus',
          },
          {
            theme: '好きな教科',
            answer: '国語・ゲーム',
          },
          {
            theme: '好きな食べ物',
            answer: '焼き肉・ラーメン',
          },
        ],
        btn_items: [
          {
            ja: "紹介",
            to: "#profile",
          },{
            ja: "性格",
            to: "#personality",
          },
          {
            ja: "特技",
            to: "#skills",
          },
          {
            ja: "歴史",
            to: "#history",
          },{
            ja: "趣味",
            to: "#hobby",
          },
    ]
      }
    },
  }
</script>