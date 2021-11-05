<template>
  <v-footer>
    <v-container>
      <div class="d-flex flex-column flex-md-row justify-center text-center px-sm-3">
        <v-btn
          v-for="(item, index) in menu"
          :key="index"
          text
          :to="item.link"
          width="180px"
          height="50px"
          tile
          color="primary"
          style="letter-spacing: 4px"
          class="text-center justify-center mx-auto mx-md-1 mb-3 mb-md-0"
        >
          <span
            v-html="item.title" style="line-height: 20px" class="text-caption text-lg-body-1 font-weight-medium" />
        </v-btn>
      </div>
      <div class="text-h5 font-weight-black text-center mt-9">
        <img src="/images/logo-vertical.svg" alt="" height="150">
        <!-- <p class="text-subtitle-1">
          {{ info[0].subTitle }}
        </p>
        <p class="text-h5 font-weight-bold">
          {{ info[0].mainTitle }}
        </p> -->
      </div>
      <div class="subtitle font-weight-medium mt-1 text-center">
        <v-icon>mdi-map-marker-radius-outline</v-icon>
        <div>〒 {{ info[0].postcode }}</div>
        <div>{{ info[0].address }}</div>
        <div class="mt-3">
          <v-icon>mdi-phone-outline</v-icon>
          {{ info[0].phone }}
        </div>
        <div>
          <v-icon>mdi-fax</v-icon>
          {{ info[0].fax }}
        </div>
        <div>
          <v-icon>mdi-email-outline</v-icon>
          {{ info[0].email }}
        </div>
      </div>
      <div class="mt-3 text-center">
        <v-btn icon href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="mx-1"><v-icon>mdi-instagram</v-icon></v-btn>
        <v-btn icon href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="mx-1"><v-icon>mdi-facebook</v-icon></v-btn>
        <v-btn icon href="https://www.twitter.com/" target="_blank" rel="noopener noreferrer" class="mx-1"><v-icon>mdi-twitter</v-icon></v-btn>
      </div>
      <div class="text-center mt-4">
        <!-- TOPページ -->
        <v-btn v-if="$route.path === '/'" href="#contact" class="px-sm-8" color="primary" large tile>
          お問い合わせ
        </v-btn>
        <!-- TOPページ以外 -->
        <v-btn v-else to="/#contact" class="px-sm-8" color="primary" large tile>
          お問い合わせ
        </v-btn>
      </div>
      <v-divider class="mt-8 mb-4" />
      <div class="d-flex justify-center overline">
        <div class="secondary--text">© {{ info[0].copyright }}</div>
      </div>
    </v-container>
  </v-footer>
</template>

<script>
import { menu as menu } from '../toolbar/toolbar_items.js'
import { info as info } from './footer_items.js'

export default {
  data() {
    return {
      menu,
      info
    }
  }
}
</script>