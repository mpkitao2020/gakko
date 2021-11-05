<template>
  <v-sheet id="sightseeing" class="background py-6 py-md-16">
    <v-container>
      <div class="d-flex">
        <v-divider class="my-5 my-md-3 senary" />
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">ABOUT</h2>
          <div class="font-weight-bold body-2 senary--text">店舗紹介</div>
        </div>
        <v-divider class="my-5 my-md-3 senary" />
      </div>
      <v-row class="mt-6">
        <v-col cols="12" md="4">
          <v-img
            class="rounded-0 elevation-6"
            src="/images/feature6-a0/interior-1.jpg"
            :max-height="$vuetify.breakpoint.mdAndUp ? '700' : '300'"
            :min-height="$vuetify.breakpoint.mdAndUp ? '500' : '300'"
            position="10% center"
          ></v-img>
        </v-col>
        <v-col cols="12" md="4" class="my-auto">
            <h2 class="text-h5 text-lg-h4 font-weight-medium senary--text">落ち着いた空間で憩いのひと時を</h2>
            <div class="text-body-1 text-lg-h6 mt-5">
              ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
              ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
              ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
            </div>
          <div class="text-center">
            <v-btn class="px-8 mt-5 senary white--text" link to="/sightseeing" large rounded>
              詳しく見る
            </v-btn>
          </div>
        </v-col>
        <v-col cols="12" md="4">
          <v-img
            class="rounded-0 elevation-6"
            src="/images/feature6-a0/interior-2.jpg"
            :max-height="$vuetify.breakpoint.mdAndUp ? '700' : '300'"
            :min-height="$vuetify.breakpoint.mdAndUp ? '500' : '300'"
            position="left center"
          ></v-img>
        </v-col>
      </v-row>
    </v-container>
  </v-sheet>
</template>
