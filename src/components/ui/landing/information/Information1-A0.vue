<template>
  <v-sheet class="white py-6 py-md-16">
    <v-container>
      <v-responsive :max-width="$vuetify.breakpoint.mdAndUp ? '900' : '550'" class="mx-auto">
        <v-row class="d-block d-md-flex ma-0">
          <v-col cols="12" md="6" class="pa-0 pa-sm-3 pa-md-6">
            <v-row align="center" class="justify-center ma-0">
              <v-col cols="12" sm="auto" md="12" class="text-center text-md-left pa-0">
                <v-img src="/_template/clinic/images/information1-a1/logo.png" class="d-inline-flex" />
              </v-col>
              <v-col cols="12" sm="auto" md="12" offset-sm="1" offsent-md="0" class="pa-0">
                <div class="d-flex justify-center justify-md-start">
                  <v-icon dense v-text="'mdi-map-marker'" class="mx-1" />
                  <div class="text-body-2 text-md-body-1">
                    <span class="text-caption text-md-body-2">〒680-0871</span><br>
                    鳥取県鳥取市吉成南町1-24-2
                  </div>
                </div>
                <div class="d-flex justify-center justify-md-start">
                  <v-icon dense v-text="'mdi-phone'" class="mx-1" />
                  <div class="text-h4 text-md-h3 font-weight-regular primary--text">0857-51-0066</div>
                </div>
              </v-col>
            </v-row>
            <v-row align="center" class="text-caption text-center ma-0 mt-3 mt-md-6 mx-1 py-1">
              <v-col cols="3" style="line-height: 16px" class="pa-0 pr-1">
                診療時間
              </v-col>
              <v-col
                v-for="item in ['月', '火', '水', '木', '金', '土', '日祝']"
                :key="item"
                class="pa-0"
              >
                {{ item }}
              </v-col>
            </v-row>
            <v-divider />
            <v-row align="center" class="text-caption text-center primary--text ma-0 mx-1 py-1">
              <v-col cols="3" style="line-height: 16px" class="pa-0 pr-1">
                09:00 <span v-html="$vuetify.breakpoint.smAndUp ? '-' : '<br>|<br>'" /> 13:00
              </v-col>
              <v-col
                v-for="(item, i) in am"
                :key="i"
                class="text-body-1 text-md-h5 pa-0"
              >
                {{ item }}
              </v-col>
            </v-row>
            <v-divider />
            <v-row align="center" class="text-caption text-center primary--text ma-0 mx-1 py-1">
              <v-col cols="3" style="line-height: 16px" class="pa-0 pr-1">
                14:30 <span v-html="$vuetify.breakpoint.smAndUp ? '-' : '<br>|<br>'" /> 18:00
              </v-col>
              <v-col
                v-for="(item, i) in pm"
                :key="i"
                class="text-body-1 text-md-h5 pa-0"
              >
                {{ item }}
              </v-col>
            </v-row>
            <v-divider />
          </v-col>
          <v-col cols="12" md="6" class="mt-3 mt-md-0 pa-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12995.607346526911!2d134.2188154!3d35.4819725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc44e075ea0125845!2z5qCq5byP5Lya56S-TWFnaWNQbHVz!5e0!3m2!1sja!2sjp!4v1621560024812!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" loading="lazy" />
          </v-col>
        </v-row>
      </v-responsive>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      am: ['●', '●', '●', '●', '●', '●', '-'],
      pm: ['●', '●', '●', '-', '●', '-', '-']
    }
  }
}
</script>
