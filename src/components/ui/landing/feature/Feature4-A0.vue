<template>
  <v-sheet id="other" class="bg_2 py-6 py-md-16">
    <v-container class="px-1 px-sm-3">
      <div class="text-center mx-3">
				<h2 style="letter-spacing: 4px !important; margin-left: 4px;" class="d-inline-flex text-h4 text-lg-h2 tertiary--text">OTHER</h2>
				<div class="font-weight-bold">その他</div>
      </div>
      <v-row class="ma-0 mt-6">
        <v-col cols="12" sm="6" lg="3" class="py-0 px-0 px-sm-3">
          <v-card height="100%" class="tertiary--text pa-6">
            <v-responsive height="100%" class="black--text d-flex align-center">
              <div class="text-h6 font-weight-bold --text text-center">
                チェックイン / アウト
                <v-divider color="tertiary" class="my-3" />
                <span class="text-subtitle-1 font-weight-bold tertiary--text text-center">IN － 14:00から<br>OUT － 12:00まで</span>
              </div>
            </v-responsive>
          </v-card>
        </v-col>
        <v-col cols="12" sm="6" lg="3" class="mt-3 mt-sm-0 py-0 px-0 px-sm-3">
          <v-card height="100%" class="tertiary--text pa-6">
            <v-responsive height="100%" class="black--text d-flex align-center">
              <div>
                <div class="text-h6 font-weight-bold --text text-center">営業日</div>
                <v-divider color="tertiary" class="my-3" />
                <div class="text-subtitle-1 font-weight-bold tertiary--text text-center">不定休<br>（ご予約状況によります。）</div>
              </div>
            </v-responsive>
          </v-card>
        </v-col>
        <v-col cols="12" sm="6" lg="3" class="mt-3 mt-lg-0 py-0 px-0 px-sm-3">
          <v-card height="100%" class="tertiary--text pa-6">
            <v-responsive height="100%" class="black--text d-flex align-center">
              <div>
                <div class="text-h6 font-weight-bold --text text-center">予約方法</div>
                <v-divider color="tertiary" class="my-3" />
                <div class="text-subtitle-1 font-weight-bold tertiary--text text-center">
                  電話及び
                  <v-btn to="/#contact" text height="24px" class="blue--text text--darken-5 pa-0">
                    <v-icon dense color="blue darken-5" style="margin-bottom: 2px">mdi-link-variant</v-icon>
                    お問い合せ
                  </v-btn>
                  より<br>お願いします。
                </div>
              </div>
            </v-responsive>
          </v-card>
        </v-col>
        <v-col cols="12" sm="6" lg="3" class="mt-3 mt-lg-0 py-0 px-0 px-sm-3">
          <v-card height="100%" class="tertiary--text pa-6">
            <v-responsive height="100%" class="black--text d-flex align-center">
              <div>
                <div class="text-h6 font-weight-bold text-center">お支払い</div>
                <v-divider color="tertiary" class="my-3" />
                <div class="text-subtitle-1 font-weight-bold tertiary--text text-center">銀行振込<br>クレジットカード（準備中）</div>
              </div>
            </v-responsive>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      features: [{
        title: 'チェックイン / チェックアウト',
        description: 'IN　－　14:00から<br>OUT　－　12:00まで'
      }, {
        title: '営業日',
        description: '不定休（ご予約状況によります）'
      }, {
        title: '予約方法',
        description: '電話及び<a v-scroll-to="" to="/#contact">お問い合せ</a>より'
      }, {
        title: 'お支払い',
        description: '銀行振込、クレジットカード（準備中）'
      }]
    }
  }
}
</script>
