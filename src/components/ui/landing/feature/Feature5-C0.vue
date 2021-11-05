<template>
  <v-sheet id="sightseeing" class="py-6 py-sm-16 background">
    <v-container>
      <div class="d-flex justify-center">
        <div class="text-center">
          <h2 class="text-h3 font-weight-bold text-lg-h1">COURCE & PLAN</h2>
          <div class="text-body-2 font-weight-thin primary--text text--lighten-4">コース＆プラン</div>
        </div>
      </div>
      <div class="d-flex flex-column flex-sm-row mt-3 mt-sm-6">
        <div class="w-full w-sm-half my-auto px-sm-6">
          <h2 class="text-h5 text-lg-h4 font-weight-bold">タイトル</h2>
            <div class="text-body-1 text-lg-h6 mt-6 mt-sm-5">
              ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
              ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
              ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
          </div>
          <div class="d-none d-sm-block text-center">
            <v-btn link to="/menu" large tile color="primary" class="mt-3 mt-sm-6 px-8">
              詳しく見る
            </v-btn>
          </div>
        </div>
        <div class="w-full w-sm-half text-center mt-3 my-sm-auto">
          <v-img
            src="/images/feature5-c0/cource.jpg"
            :aspect-ratio="4/3"
          ></v-img>
          <v-btn link to="/menu" large tile color="primary" class="d-sm-none mt-3 mt-sm-6 px-8">
            詳しく見る
          </v-btn>
        </div>
      </div>
    </v-container>
  </v-sheet>
</template>