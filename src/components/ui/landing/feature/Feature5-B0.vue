<template>
  <v-sheet class="bg py-6 py-md-16">
    <v-container>
      <div class="d-flex justify-center">
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">SIGHT<br class="d-sm-none">SEEING</h2>
          <v-divider style="padding-top: 5px" class="my-auto senary" />
          <div class="text-body-2 font-weight-bold senary--text mt-1">観光</div>
        </div>
      </div>
      <div class="d-flex flex-column flex-sm-row mt-6">
        <v-responsive :aspect-ratio="4/3" class="w-full w-sm-half my-auto pa-0">
          <v-img src="/images/feature5-b0/cource.jpg" :aspect-ratio="4/3" />
        </v-responsive>
        <div class="w-full w-sm-half d-flex align-center">
          <div class="pl-0 pl-sm-6">
            <!-- <h2 class="text-h4 text-lg-h3 mt-0 mt-xl-10 senary--text">周辺の観光情報ご案内</h2> -->
            <div class="text-body-1 text-lg-h6 font-weight-bold textbase--text mt-6 mt-sm-5">
              ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
              ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
              ＜－－－ダミーテキスト－－＞ここに文章が入ります。＜－－－ダミーテキスト－－＞
            </div>
            <div class="text-center">
              <v-btn link to="/sightseeing" large rounded class="senary white--text px-8 mt-5">
                詳しく見る
              </v-btn>
            </div>
          </div>
        </div>
      </div>
    </v-container>
  </v-sheet>
</template>
