<template>
  <v-footer>
    <v-container class="py-5">
      <v-row>
        <v-col cols="12" md="4">
          <div class="mb-2">
            <router-link to="#" class="d-flex align-center text-decoration-none mr-2">
              <span class="font-weight-black text-uppercase text-h5 text-truncate">
                MagicPlus
              </span>
            </router-link>
          </div>
          <div class="text-body-1 secondary--text text--lighten-2">
            <div>
              〒680-0871 鳥取県鳥取市吉成南町1-24-2 2F
            </div>
            <div class="mt-2">
              <v-btn icon color="secondary lighten-2" class="mr-1"><v-icon>mdi-facebook</v-icon></v-btn>
              <v-btn icon color="secondary lighten-2" class="mr-1"><v-icon>mdi-twitter</v-icon></v-btn>
              <v-btn icon color="secondary lighten-2" class="mr-1"><v-icon>mdi-linkedin</v-icon></v-btn>
              <v-btn icon color="secondary lighten-2" class="mr-1"><v-icon>mdi-google-plus</v-icon></v-btn>
            </div>
          </div>
        </v-col>
        <v-col
          v-for="(item, i) in footer"
          :key="i"
          cols="12"
          md="2"
        >
          <div v-for="(link, j) in item.links" :key="j" class="my-1 body-1 font-weight-bold">
            <router-link
              v-if="link.to"
              class="text-decoration-none secondary--text"
              :to="link.to"
            >{{ link.label }}</router-link>
          </div>
        </v-col>
      </v-row>
      <v-divider class="my-4"></v-divider>
      <div class="d-flex flex-column flex-sm-row align-center justify-center mt-4 overline">
        <div class="secondary--text">© indielayer 2021</div>
      </div>
    </v-container>
  </v-footer>
</template>

<script>
export default {
  data() {
    return {
      footer: [{
        title: '企業情報',
        links: [{
          label: '企業情報',
          to: '/about'
        }]
      }, {
        title: 'お知らせ',
        links: [{
          label: 'お知らせ',
          to: '/news'
        }]
      }, {
        title: '採用情報',
        links: [{
          label: '採用情報',
          to: '/recruit'
        }]
      }, {
        title: 'お問い合わせ',
        links: [{
          label: 'お問い合わせ',
          to: '/contact'
        }]
      }]
    }
  }
}
</script>
