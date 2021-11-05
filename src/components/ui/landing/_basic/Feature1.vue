<template>
  <v-sheet>
    <v-container class="py-4 py-lg-8">
      <v-row>
        <v-col cols="12" md="6">
          <h2 class="text-h3 text-lg-h2 mt-0 mt-xl-10">
            企業情報
          </h2>
          <div class="text-h6 text-lg-h5 mt-5">
            海外では優秀な一流エンジニアは「Wizard」と呼ばれ高い地位を持ち、大変尊敬されています。そのウィザード達は大げさでなく世界を変えるシステムを今も作り続けています。エンジニア全員が「Wizard（魔法使い）」となり、その技術である「Magic（魔法）」を色々なものに「Plus（付与）」して日々の生活を豊かにできる。そんな高いレベルの技術者集団を目指して、株式会社MagicPlusは日々魔法の研究・開発に勤しんでいます。
          </div>
          <div class="mt-4">
            <router-link to="/about" class="text-decoration-none font-weight-bold text-h6">
              詳細はこちら
            </router-link>
          </div>
        </v-col>
        <v-col cols="12" md="6">
          <v-img src="./images/features/5.jpg" class="rounded-lg elevation-6" max-height="480"></v-img>
        </v-col>
      </v-row>
    </v-container>
  </v-sheet>
</template>
