<template>
  <v-sheet class="background py-6 py-md-16">
    <v-container>
      <v-responsive max-width="900" class="mx-auto">
        <v-row class="d-block d-sm-flex my-0 mx-9">
          <v-col cols="12" sm="6" class="pa-0">
            <v-img src="/images/logo-horizontal.svg" class="d-inline-flex" />
            <v-row class="text-caption text-sm-body-2 ma-0">
              <v-col cols="1" class="pa-0"><v-icon dense>mdi-map-marker</v-icon></v-col>
              <v-col class="ml-1 ml-sm-0 pa-0">
                〒680-0871<br>
                <span class="text-body-2 text-sm-body-1">鳥取県鳥取市吉成南町1-24-2</span>
              </v-col>
            </v-row>
            <v-row align="center" class="text-subtitle-1 ma-0">
              <v-col cols="1" class="pa-0"><v-icon dense>mdi-phone</v-icon></v-col>
              <!-- Tel. -->
              <v-col class="text-h4 text-md-h3 font-weight-regular primary--text ml-1 ml-sm-0 pa-0">0857-51-0066</v-col>
            </v-row>
          </v-col>
          <v-col cols="12" sm="6" class="mt-3 mt-sm-0 pa-0">
            <v-row align="center" class="text-caption text-center ma-0 mx-1 py-1">
              <v-col cols="3" style="line-height: 16px" class="pa-0 pr-1">
                診療時間
              </v-col>
              <v-col
                v-for="item in ['月', '火', '水', '木', '金', '土', '日祝']"
                :key="item"
                class="pa-0"
              >
                {{ item }}
              </v-col>
            </v-row>
            <v-divider />
            <v-row align="center" class="text-caption text-center primary--text ma-0 mx-1 py-1">
              <v-col cols="3" style="line-height: 16px" class="pa-0 pr-1">
                9:00 <span v-html="$vuetify.breakpoint.smAndUp ? '-' : '<br>|<br>'" /> 13:00
              </v-col>
              <v-col
                v-for="(item, i) in am"
                :key="i"
                class="text-body-1 text-md-h5 pa-0"
              >
                {{ item }}
              </v-col>
            </v-row>
            <v-divider />
            <v-row align="center" class="text-caption text-center primary--text ma-0 mx-1 py-1">
              <v-col cols="3" style="line-height: 16px" class="pa-0 pr-1">
                14:30 <span v-html="$vuetify.breakpoint.smAndUp ? '-' : '<br>|<br>'" /> 18:00
              </v-col>
              <v-col
                v-for="(item, i) in pm"
                :key="i"
                class="text-body-1 text-md-h5 pa-0"
              >
                {{ item }}
              </v-col>
            </v-row>
            <v-divider />
          </v-col>
        </v-row>
        <v-card
          tile
          elevation="0"
          style="border: 1px solid"
          class="primary--text mt-6 mx-12 pa-6">
          <v-row
            v-for="(item, j) in info"
            :key="j"
            class="grey--text text--darken-2 ma-0"
            :class="{ 'mt-3': j !== 0 }"
          >
            <v-col cols="1" class="pa-0">
              <v-icon v-text="'mdi-check'" class="text-h5 font-weight-bold primary--text" />
            </v-col>
            <v-col cols="11" class="pa-0">
              <span v-html="item.text" class="text-subtitle-2" />
            </v-col>
          </v-row>
        </v-card>
        <div class="text-center">
          <v-btn
            href="PDF/questionnaire.pdf"
            target="_blank"
            tile
            color="primary"
            class="text-body-1 font-weight-bold mt-6 py-3 px-6"
          >
            問診表ダウンロード（ PDF / 00KB ）
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
      am: ['●', '●', '●', '●', '●', '●', '-'],
      pm: ['●', '●', '●', '-', '●', '-', '-'],
      info: [
        {
          text: '月1回、[ 健康保険証 ] の提示をお願いいたします。'
        },
        {
          text: '現在服用中の薬があれば、その薬剤名が分かるもの・お薬ノートをご持参下さい。'
        },
        {
          text: '過去に薬の服用によって何かしらの症状の発症や問題を経験したことがある方、妊娠中・授乳中の方は診察医に必ず事前にお伝えください。'
        },
        {
          text: '問診表は以下の患者さんが必要となります。<br>初診の方 / 前受診から3か月以上経過した方 / 住所等に変更のある方<br><span class="text-caption primary--text">※ 問診票は下記のボタンからダウンロードもできます。事前に記入の上、お持ちいただいても結構です。</span>'
        }
      ]
    }
  }
}
</script>
