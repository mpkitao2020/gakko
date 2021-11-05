<template>
  <v-sheet id="skills" class="background py-6 py-sm-16">
    <v-container class="px-2">
      <div class="d-flex">
        <v-divider class="my-5 my-md-3 senary" />
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">特技</h2>
          <div class="font-weight-bold body-2 senary--text">Skills</div>
        </div>
        <v-divider class="my-5 my-md-3 senary" />
      </div>
      <v-responsive max-width="900" class="mx-auto">
      <v-row class="mt-6 mb-0">
        <v-col cols="12" md="4">
          <v-img
            class="rounded-0 elevation-6"
            src="/images/school/baseball.jpg"
            :max-height="$vuetify.breakpoint.mdAndUp ? '700' : '300'"
            :min-height="$vuetify.breakpoint.mdAndUp ? '500' : '300'"
            position="left center"
            style="transform: scale(-1, 1);"
          ></v-img>
        </v-col>
        <v-col cols="12" md="4" class="my-auto">
            <h2 class="d-flex justify-md-start d-flex justify-center text-h5 text-lg-h4 font-weight-bold senary--text">野球</h2>
            <div class="d-flex justify-md-start d-flex justify-center text-overline font-weight-bold senary--text">Baseball</div>
            <div class="text-body-1 text-lg-h6 mt-4 mt-sm-5">
              昨年の代表決定戦3連敗の雪辱から、この1年間「勝つにはどうすべきか」を真剣に話し合い、「自分に対して強くなる」ことを信念に、妥協を許さず努力してきました。<br>フレッシュな若手のチームワークを高め、東京ドームでは一戦必勝を目指します。<br>多くの皆様に感動していただける試合を1試合でも多く戦いますので、ご声援よろしくお願いします。
            </div>
          <div class="text-center">
          </div>
        </v-col>
        <v-col cols="12" md="4">
          <v-img
            class="rounded-0 elevation-6"
            src="/images/school/baseball.jpg"
            :max-height="$vuetify.breakpoint.mdAndUp ? '700' : '300'"
            :min-height="$vuetify.breakpoint.mdAndUp ? '500' : '300'"
            position="left center"
          ></v-img>
        </v-col>
      </v-row>
      </v-responsive>
    </v-container>
  </v-sheet>
</template>
