<template>
  <v-sheet class="py-4 py-lg-8">
    <v-container>
      <div style="letter-spacing: 8px !important" class="text-subtitle-1 text-lg-h5 font-weight-regular text-center primary--text">診療について</div>
      <v-row class="justify-center ma-0 mt-6">
        <v-col
          v-for="(item, i) in features"
          :key="i"
          cols="12"
          sm="6"
          lg="3"
          class="pa-0"
          :class="{ 'mt-3 mt-lg-0': i !== 0, 'mt-sm-0': i === 1 }"
        >
          <v-responsive max-width="300" class="mx-auto">
              <v-card rounded elevation="0">
                <v-img :src="item.image" :aspect-ratio="4/3" />
              </v-card>
            <div class="d-flex align-center">
              <div class="text-h6 font-weight-bold pa-1">{{ item.sub_ja }}</div>
              <div class="text-subtitle-1 font-weight-regular pa-1">{{ item.sub_en }}</div>
            </div>
            <v-divider class="black" />
          </v-responsive>
        </v-col>
      </v-row>
      <div class="text-center">
        <v-btn link to="/examination" large outlined class="text-caption text-lg-body-1 font-weight-thin primary--text px-8 mt-3 mt-sm-6">
          もっと見る
        </v-btn>
      </div>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      features: [{
        icon: 'mdi-account-check-outline',
        sub_ja: '歯科',
        sub_en: 'Dental',
        image: '/images/feature7-a0/dentist.jpg'
      }, {
        icon: 'mdi-lifebuoy',
        sub_ja: '内科',
        sub_en: 'Internal Medicine',
        image: '/images/feature7-a0/internal-medicine.jpg'
      }, {
        icon: 'mdi-email-open-multiple-outline',
        sub_ja: '外科',
        sub_en: 'General Surgery',
        image: '/images/feature7-a0/surgery.jpg'
      }, {
        icon: 'mdi-clock-outline',
        sub_ja: '形成外科',
        sub_en: 'Plastic Surgery',
        image: '/images/feature7-a0/plastic-surgery.jpg'
      }]
    }
  }
}
</script>
