<template>
  <v-sheet id="sightseeing" class="py-6 py-md-16 background">
    <v-container>
      <div class="d-flex">
        <v-divider class="my-auto quinary" />
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">COURCE & PLAN</h2>
          <div class="font-weight-bold body-2 quinary--text">コース ＆ プラン</div>
        </div>
        <v-divider class="my-auto quinary" />
      </div>
      <div class="d-flex flex-column flex-md-row mt-6">
        <div class="w-full w-md-half my-auto px-md-6">
          <h2 class="text-h5 text-lg-h4 font-weight-medium quinary--text">タイトル</h2>
          <div class="text-body-1 text-lg-h6 mt-6">
            ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
            ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
            ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
          </div>
          <div class="text-center">
            <v-btn class="px-8 mt-6 quinary white--text" link to="/cource&plan" large rounded>
              詳しく見る
            </v-btn>
          </div>
        </div>
        <div class="w-full w-md-half mt-6 my-md-auto">
          <v-img
            src="/images/feature5-a0/cource.jpg"
            :max-height="$vuetify.breakpoint.mdAndUp ? '600' : '300'"
            alt=""
          ></v-img>
        </div>
      </div>
    </v-container>
  </v-sheet>
</template>