<template>
  <div>
    <v-navigation-drawer v-model="drawer" app temporary>
      <v-list dense nav>
        <v-subheader class="text-uppercase font-weight-bold">Menu</v-subheader>
        <v-list-item v-for="(item, index) in menu" :key="index" link :to="item.link">
          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-btn
      class="d-md-none drawer-button"
      rounded
      @click="drawer = !drawer"
    >
      <v-icon right>mdi-menu</v-icon>
    </v-btn>

    <v-app-bar app height="80">
      <v-container class="py-0 px-0 px-sm-2 fill-height" :fluid="isFluid">
        <router-link to="/" class="d-flex align-center text-decoration-none mr-2">
          <!-- <img src="images/v-logo-small.png" alt="" height="48" class="mr-1"> -->
          <span class="font-weight-black text-uppercase">
            MagicPlus
          </span>
        </router-link>

        <v-spacer></v-spacer>

        <div class="d-none d-md-block nav">
          <v-btn
            v-for="(item, index) in menu"
            :key="index"
            text
            :to="item.link"
            link
            class="mx-1"
          >
            {{ item.title }}
          </v-btn>
        </div>

        <v-btn color="primary" link to="/contact" large>
          お問い合わせ
        </v-btn>

      </v-container>
    </v-app-bar>
  </div>
</template>

<script>
import { menu2 as menu } from './menus.js'

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
  }
}
</script>

<style scoped>
.drawer-button {
  position: fixed;
  top: 60px;
  left: -22px;
  z-index: 6;
}
</style>
