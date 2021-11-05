<template>
  <v-sheet class="pa-2">
    <div class="mx-auto" style="max-width: 2100px">
      <div class="py-2 px-md-2 text-uppercase caption font-weight-bold d-flex align-center">
        <router-link :to="from" class="text-decoration-none d-flex align-center">
          <v-icon small color="primary">mdi-chevron-left</v-icon>
          <span>{{ fromTitle }}</span>
        </router-link>
        <span class="mx-1">&gt;</span>
        <span>{{ title }}</span>
      </div>
      <div class="pa-md-2" style="min-width: 0; width: 100%;">
        <h2 class="text-h4 mb-3">{{ title | uppercase }}</h2>

        <v-divider class="my-2 mb-3"></v-divider>

        <div class="mt-2">
          <div v-if="!locked">
            <div class="d-flex mb-2">
              <v-btn-toggle
                v-model="screen"
                color="primary"
                mandatory
                dense
              >
                <v-btn>
                  Desktop
                </v-btn>
                <v-btn>
                  Mobile
                </v-btn>
              </v-btn-toggle>

              <v-spacer></v-spacer>

              <v-btn icon class="ml-1" @click="isDark = !isDark">
                <v-icon>{{ isDark ? 'mdi-white-balance-sunny' : 'mdi-brightness-2' }}</v-icon>
              </v-btn>
            </div>
            <v-card class="iframe-wrapper" :class="{ 'mobile': screen === 1 }">
              <iframe ref="iframe" class="iframe" title="Carbon UI" :src="demo"></iframe>
            </v-card>
          </div>
          <div v-else>
            <div class="d-flex mb-2 align-center">
              <v-btn-toggle
                v-model="screen"
                color="primary"
                mandatory
                dense
              >
                <v-btn>
                  Desktop
                </v-btn>
                <v-btn>
                  Mobile
                </v-btn>
              </v-btn-toggle>

              <v-spacer></v-spacer>

              <v-avatar color="grey lighten-3" size="32" class="mr-1">
                <v-icon small>mdi-lock</v-icon>
              </v-avatar>
              <span class="text-overline">Image Preview</span>

              <v-spacer></v-spacer>

              <v-btn icon class="ml-1" @click="isDark = !isDark">
                <v-icon>{{ isDark ? 'mdi-white-balance-sunny' : 'mdi-brightness-2' }}</v-icon>
              </v-btn>
            </div>

            <v-card class="image-wrapper" :class="{ 'mobile': screen === 1 }">
              <v-img :src="image" :alt="title" />
            </v-card>
          </div>
        </div>
      </div>
    </div>
  </v-sheet>
</template>

<script>
export default {
  props: {
    locked: {
      type: Boolean,
      default: true
    },
    demo: {
      type: String,
      default: ''
    },
    img: {
      type: String,
      default: ''
    },
    title: {
      type: String,
      default: ''
    },
    from: {
      type: String,
      default: ''
    },
    fromTitle: {
      type: String,
      default: ''
    }
  },
  data() {
    return {
      screen: 0,
      isDark: false
    }
  },
  computed: {
    image() {
      const dark = `${this.img}-dark.jpg`
      const darkMobile = `${this.img}-mobile-dark.jpg`
      const light = `${this.img}-light.jpg`
      const lightMobile = `${this.img}-mobile-light.jpg`

      if (this.isDark) {
        return this.screen === 1 ? darkMobile : dark
      } else {
        return this.screen === 1 ? lightMobile : light
      }
    }
  },
  watch: {
    isDark() {
      this.changeIframeSrc()
    }
  },
  methods: {
    changeIframeSrc() {
      const { iframe } = this.$refs

      iframe.contentWindow.location.replace(`${this.demo}?theme=${this.isDark ? 'dark' : 'light'}`)
    }
  }
}
</script>

<style lang="scss">
.iframe-wrapper {
  height: 62rem;
  margin: auto;
  overflow: hidden;

  &.tablet {
    max-width: 36rem;
  }

  &.mobile {
    max-width: 28rem;
  }
}

.image-wrapper {
  margin: auto;
  overflow: hidden;

  &.tablet {
    max-width: 36rem;
  }

  &.mobile {
    max-width: 28rem;
  }
}

.iframe {
  width: 100%;
  height: 100%;
  border: none;
}
</style>
