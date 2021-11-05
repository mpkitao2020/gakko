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
          style="letter-spacing: 4px"
          color="primary"
          tile
        >
          <div
            v-html="item.title" style="line-height: 20px" />
        </v-btn>
        <!-- TOPページ -->
        <v-btn v-if="$route.path === '/'" href="#contact" color="primary" width="160px" large tile class="mt-6">
          お問い合わせ
        </v-btn>
        <!-- TOPページ以外 -->
        <v-btn v-else to="/#contact" color="primary" width="160px" large tile class="mt-6">
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
    <v-app-bar app height="80" hide-on-scroll >
      <v-container class="pa-0 px-sm-2" :fluid="isFluid">
        <v-row justify="center" align="center" class="ma-0">
          <v-col cols="4" lg="3" class="text-center text-sm-left pa-0">
            <router-link to="/" class="d-flex align-center text-decoration-none mr-2">
              <img src="/images/toolbar/logo.svg" alt="株式会社MagicPlus">
            </router-link>
          </v-col>
          <v-col
            cols="7"
            lg="5"
            offset-lg="2"
            offset-xl="3"
            class="nav d-none d-md-flex justify-space-between text-right pa-0 pr-2 pr-xl-6"
          >
            <v-btn
              v-for="(item, index) in gnav"
              :key="index"
              v-html="item.title"
              :to="item.link"
              width="24%"
              height="50px"
              color="primary"
              text
              tile
              style="letter-spacing: 4px"
              class="font-weight-bold text-center"
            />
          </v-col>
          <v-col cols="1" xl="1" class="pa-0">
            <v-btn to="/#contact" color="primary" class="d-none d-md-flex" large tile>
              お問い合わせ
            </v-btn>
          </v-col>
        </v-row>
      </v-container>
    </v-app-bar>
  </div>
</template>

<script>
import { menu as menu } from '../toolbar/toolbar_items.js'

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