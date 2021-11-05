<template>
  <v-sheet id="skills" class="py-6 py-sm-16">
    <v-container class="px-0 px-sm-3">
      <div class="text-center mx-3">
				<h2 style="letter-spacing: 4px !important; margin-left: 4px;" class="d-inline-flex text-h4 text-lg-h3 ">特技</h2>
				<div class="text-body-2 font-weight-bold tertiary--text">Skills</div>
      </div>
      <div class="d-flex flex-column flex-md-row mt-3 mt-md-6 ss-list">
        <div class="w-full w-md-half d-flex align-center">
          <div class="pa-3 pa-md-6 pa-lg-12 mt-3 mt-sm-0">
            <div class="text-h6 text-lg-h4 font-weight-bold tertiary--text">
              野球
            </div>
            <div class="text-overline font-weight-bold tertiary--text">
              Baseball
            </div>
            <div class="text-body-2 text-lg-h6 font-weight-bold textbase--text mt-3">
              昨年の代表決定戦3連敗の雪辱から、この1年間「勝つにはどうすべきか」を真剣に話し合い、「自分に対して強くなる」ことを信念に、妥協を許さず努力してきました。<br>フレッシュな若手のチームワークを高め、東京ドームでは一戦必勝を目指します。<br>多くの皆様に感動していただける試合を1試合でも多く戦いますので、ご声援よろしくお願いします。
            </div>
          </div>
        </div>
        <div
          class="w-full w-md-half"
          :class="$vuetify.breakpoint.mdAndUp ? 'my-auto' : 'mt-6'"
        >
          <v-img src="/images/school/baseball.jpg" :aspect-ratio="3/2" contain />
        </div>
      </div>
    </v-container>
  </v-sheet>
</template>
