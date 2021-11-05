<template>
  <div>
    <v-navigation-drawer v-model="drawer" app temporary>
      <div nav width="200px" class="text-center">
        <p class="text-uppercase font-weight-bold text-center mt-6 mb-0">Menu</p>
        <v-btn
          v-for="(item, index) in gnav"
          :key="index"
          text
          :to="item.link"
          class="text-body-1 font-weight-medium text-center mt-3"
          width="160px"
          height="50px"
          style="letter-spacing: 4px"
          color="primary"
          tile
        >
          <div
            v-html="item.title" style="line-height: 20px" />
        </v-btn>
        <!-- TOPページ -->
        <v-btn v-if="$route.path === '/'" href="#contact" color="primary" width="160px" large tile class="text-body-1 font-weight-medium mt-6">
          お問い合わせ
        </v-btn>
        <!-- TOPページ以外 -->
        <v-btn v-else to="/#contact" color="primary" width="160px" large tile class="text-body-1 font-weight-medium mt-6">
          お問い合わせ
        </v-btn>
      </div>
    </v-navigation-drawer>

    <v-btn
      class="d-md-none primary"
      :class="[$route.path === '/' ? 'top-drawer' : 'drawer-button']"
      rounded
      @click="drawer = !drawer"
    >
      <v-icon right>mdi-menu</v-icon>
    </v-btn>
    <v-app-bar app height="160">
      <v-container class="pa-0 px-sm-2" :fluid="isFluid">
        <v-row height="92" justify="center" align="center" class="ma-0">
          <!-- ロゴ -->
          <v-col cols="12" md="4" class="d-flex justify-center justify-md-start align-center pa-0">
            <router-link to="/" class="d-inline-flex">
              <img src="/images/toolbar/logo.svg" alt="株式会社MagicPlus" :height="$vuetify.breakpoint.mdAndDown ? 60 : 80">
            </router-link>
          </v-col>
          <v-col
            cols="8"
            class="nav text-right align-self-end pa-0"
          >
            <!-- 住所・電話番号 -->
            <v-row justify="end" class="d-none d-md-flex ma-0">
              <v-col cols="7" md="7" xl="9"  class="d-flex justify-end align-center pa-0">
                <div class="text-subtitle-1 font-weight-medium">
                  <v-icon small>mdi-map-marker</v-icon>
                  <span class="d-none d-md-inline-flex">Address.</span>
                </div>
                <div style="line-height: 26px" class="text-body-1 text-lg-h6 font-weight-regular text-left ml-md-1">
                  <span style="line-height: 9px" class="d-block text-caption">〒680-0871</span>
                  鳥取市吉成南町1-24-2
                  <v-divider class="black" />
                </div>
              </v-col>
              <v-col cols="5" md="5" xl="3"  class="d-flex justify-end align-center pa-0">
                <div class="text-subtitle-1 font-weight-medium">
                  <v-icon small>mdi-phone</v-icon>
                  <span class="d-none d-md-inline-flex">Tel.</span>
                </div>
                <div class="text-h6 text-md-h5 text-lg-h4 font-weight-regular ml-md-1">
                  0857-51-0066
                  <v-divider class="black" />
                </div>
              </v-col>
            </v-row>
            <!-- ナビゲーション -->
            <v-row class="d-none d-md-flex ma-0">
              <v-col
                v-for="(item, i) in gnav"
                :key="i"
                :style="{ 'border-left': '1px solid #e5e5e5', 'border-right': [i + 1 === gnav.length ? '1px' : '0' ] + ' solid #e5e5e5' }"
                class="mt-2 mt-md-3 pa-0"
              >
                <v-btn
                  v-html="item.title"
                  :to="item.link"
                  height="40"
                  block
                  color="primary"
                  text
                  tile
                  justify="space-between"
                  style="letter-spacing: 4px"
                  class="text-caption text-lg-body-1 font-weight-medium text-center px-0"
                />
              </v-col>
            </v-row>
          </v-col>
        </v-row>
      </v-container>
    </v-app-bar>
  </div>
</template>

<script>
import { menu as menu } from './toolbar_items.js'

export default {
  props: {
    isFluid: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      drawer: null,
      menu
    }
  },
  computed: {
    gnav() {
      return menu.filter(el => el.title !== 'TOP')
    }
  }
}
</script>

<style scoped>
.top-drawer {
  position: fixed;
  top: 30px;
  left: -22px;
  z-index: 6;
}
.drawer-button {
  position: fixed;
  top: 100px;
  left: -22px;
  z-index: 6;
}
</style>