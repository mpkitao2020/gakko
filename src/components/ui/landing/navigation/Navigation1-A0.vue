<template>
  <v-sheet class="pt-3 pt-sm-9 mb-n3 mb-sm-n7">
    <v-container>
      <v-responsive max-width="900" class="mx-auto">
        <v-row justify="center" align="center" class="ma-0">
          <v-col
            :cols="$vuetify.breakpoint.mdAndUp ? 'auto' : (item === '/' ? 2 : 5)"
            v-for="(item, i) in nav"
            :key="i"
            class="pa-0"
            :class="[
              $vuetify.breakpoint.smAndDown && (i + 1) % 4 === 0 ? 'd-none d-md-block' : ($vuetify.breakpoint.smAndDown ? 'd-flex d-md-block align-center' : ''),
              $vuetify.breakpoint.smAndDown && i % 4 === 0 ? 'justify-end' : ($vuetify.breakpoint.smAndDown && (i - 1) % 4 === 0 ? 'justify-center' : ''),
              { 'd-md-none': (i + 1) % 8 === 0, 'mt-2': $vuetify.breakpoint.smAndDown && i > 3 }
            ]"
          >
            <div
              v-if="item === '/'"
              class="text-h4 font-weight-bold text-center mx-2"
              :class="{ 'text-h6': $vuetify.breakpoint.smAndDown }">
              /
            </div>
            <v-btn
              v-else
              @click="$vuetify.goTo(item.to)"
              text
              tile
              :width="$vuetify.breakpoint.smAndUp ? 160 : 100"
              :height="$vuetify.breakpoint.smAndUp ? 100 : 50"
              class="px-0 px-sm-2"
            >
              <div class="w-full">
                <v-icon class="text-body-2 text-sm-h6">mdi-chevron-down-circle</v-icon>
                <div
                  class="w-full text-caption text-sm-body-1 font-weight-bold tertiary--text mt-n1 mt-sm-0"
                >
                  {{ item.ja }}
                </div>
                <div class="text-h6 text-sm-h4 font-weight-bold black--text mt-n1 mt-sm-0">
                  {{ item.en }}
                </div>
              </div>
            </v-btn>
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
      menu: [
        {
          ja: '客室',
          en: 'ROOM',
          to: '#room'
        },{
          ja: '食事',
          en: 'MEAL',
          to: '#meal'
        },{
          ja: '設備',
          en: 'FACILITY',
          to: '#facility'
        },{
          ja: 'その他',
          en: 'OTHER',
          to: '#other'
        }
      ]
    }
  },
  computed: {
    nav() {
      let data = this.menu
      for(let i=Number(this.menu.length) - 1; i>0; i--) {
        data.splice(i, 0, '/')
      }
      return data
    }
  }
}
</script>
