<template>
  <v-sheet class="white py-4 py-sm-8">
    <v-container class="px-0 px-sm-3">
      <div style="letter-spacing: 8px !important" class="d-flex justify-center text-subtitle-1 text-lg-h5 font-weight-medium primary--text">
        <div>
          <span style="padding-left: 8px">
            院長挨拶
          </span>
          <v-divider color="primary" class="mt-1" />
        </div>
      </div>
      <v-row align="center" class="ma-0 mt-6">
        <v-col cols="12" md="8" class="pa-0 px-6 px-lg-12">
          <h2 class="text-h5 text-lg-h4">タイトルタイトルタイトルタイトル</h2>
          <div class="text-body-2 text-lg-body-1 mt-3">
            ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
            ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
            ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
          </div>
        </v-col>
        <v-col cols="12" md="4" class="pa-0 pt-6 pt-md-0 pr-md-6 pr-lg-12">
          <v-img
            src="/images/greeting1-a0/director.jpg"
            contain
            :max-height="$vuetify.breakpoint.mdAndUp ? '600' : 'auto'"
            alt=""
          ></v-img>
        </v-col>
      </v-row>
    </v-container>
  </v-sheet>
</template>