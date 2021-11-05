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
          class="mt-3 text-center"
          width="160px"
          height="50px"
          style="border-bottom: solid 3px"
          :color="item.color"
          tile
        >
          <div
            v-html="item.title" style="line-height: 20px" />
        </v-btn>
        <v-btn href="#contact" color="primary" width="160px" large tile class="mt-6">
          お問い合わせ
        </v-btn>
      </div>
    </v-navigation-drawer>

    <v-btn
      class="d-md-none primary drawer-button"
      rounded
      @click="drawer = !drawer"
    >
      <v-icon right>mdi-menu</v-icon>
    </v-btn>

    <v-app-bar app height="160">
      <v-container :fluid="isFluid" class="pa-0">
        <v-row justify="center" align="center" class="ma-0">
          <!-- ロゴ -->
          <v-col
            cols="12"
            md="3"
            xl="2"
            class="d-flex justify-center align-center pa-0"
          >
            <router-link to="/" class="d-flex text-decoration-none">
              <img src="/images/toolbar/logo.svg" alt="株式会社MagicPlus" width="100%">
            </router-link>
          </v-col>
          <v-spacer />
          <v-col
            cols="auto"
            class="text-right d-none d-md-block mb-1 pa-0"
          >
            <!-- お問い合わせ -->
            <div style="margin-bottom: 26px">
              <v-btn to="/#contact" color="primary" elevation="0" large tile>
                お問い合わせ
              </v-btn>
            </div>
            <!-- ナビゲーション -->
            <v-btn
              v-for="(item, index) in gnav"
              :key="index"
              :to="item.link"
              :width="$vuetify.breakpoint.xl ? 200 : 150"
              height="50"
              :color="item.color"
              text
              tile
              style="border-bottom: solid 3px"
              class="text-center mx-1 mb-5"
            >
              <span
                v-html="item.title" style="line-height: 20px" />
            </v-btn>
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
.drawer-button {
  position: fixed;
  top: 100px;
  left: -22px;
  z-index: 6;
}
</style>