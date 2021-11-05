<template>
  <v-sheet class="background py-4 py-sm-8">
    <v-container class="px-0 px-sm-3">
      <div style="letter-spacing: 8px !important" class="text-subtitle-1 text-lg-h5 font-weight-regular text-center primary--text">当院について</div>
      <div class="d-flex flex-column flex-sm-row align-center mt-6">
        <div class="w-full w-sm-half px-3 px-sm-6 px-md-0 pr-md-12">
          <div style="letter-spacing: 2px !important" class="text-h6 text-lg-h5 font-weight-bold">私たちの思い</div>
          <div class="text-body-2 text-lg-body-1 mt-3">
            ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
            ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
            ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
          </div>
          <div class="text-center">
            <v-btn link to="/about" large outlined class="text-caption text-lg-body-1 font-weight-thin primary--text px-8 mt-3 mt-sm-6">
              もっと見る
            </v-btn>
          </div>
        </div>
        <div class="w-full w-sm-half mt-3 mt-sm-0">
          <v-img
            src="/images/about1-b0/lobby.jpg"
            :aspect-ratio="4/3"
          />
        </div>
      </div>
    </v-container>
  </v-sheet>
</template>
