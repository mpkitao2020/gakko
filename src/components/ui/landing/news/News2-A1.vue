<template>
  <v-sheet id="news" class="white py-4 py-lg-8">
    <v-container>
      <v-responsive max-width="900" class="mx-auto mt-3 pa-3" id="article">
        <v-text-field type="Number" v-model.number="num1" outlined />
        a.{{ num1 }}
        <v-text-field type="Number" v-model.number="num2" hint="hogeghoge" />
        b.{{ num2 }}
        <v-text-field v-model.number="num3" type="Number" />
        c.{{ plus_num }}
        <v-expansion-panels
          v-for="(item, i) in cms"
          :key="i"
          v-show="(page_num - 1) * 6 <= i && i < page_num * 6"
          v-model="panel[i]"
          :id="'article' + i"
        >
          <v-expansion-panel
            class="text-center rounded-0 px-0 px-sm-6"
            :class="[{'mt-3': i % 6 !== 0}, panel[i] === 0 ? 'py-6' : 'py-1']"
          >
            <v-expansion-panel-header class="px-3" :id="'this' + i">
              <v-row class="align-center ma-0 ml-3">
                <v-col cols="12" class="text-center pa-0">
                  <div width="120px" class="text-caption text-sm-subtitle-1 primary--text">{{ item.createdAt.slice(0, 10) }}</div>
                </v-col>
                <v-col cols="12" class="text-center pa-0">
                  <div class="text-body-1 text-sm-h6">{{ item.title }}</div>
                </v-col>
              </v-row>
            </v-expansion-panel-header>
            <v-expansion-panel-content>
              <v-divider class="mt-3" />
              <div class="text-caption text-sm-body-1 secondary--text mt-6 mx-0 mx-sm-12">{{ item.text }}</div>
              <v-row class="justify-center ma-0 mt-6">
                <v-col v-if="item.image" cols="12" sm="4" class="pa-1">
                  <v-img :src="item.image.url + '?h=400&border=10,55ff0000'" :aspect-ratio="4/3"></v-img>
                </v-col>
              </v-row>
            </v-expansion-panel-content>
          </v-expansion-panel>
        </v-expansion-panels>
        <div class="d-flex justify-center align-center mt-6">
          <v-btn
            @click="prev_page()"
            :disabled="page_num === 1 ? true : false"
            icon
            plain
            class="text-bory-1 mr-2"
          >
            <v-icon>mdi-chevron-left</v-icon>
          </v-btn>
          <div>
            <v-btn
              v-for="page in Math.ceil(cms.length / 6)"
              :key="page"
              @click="page_switching(page)"
              icon
              :x-small="$vuetify.breakpoint.smAndUp ? false : true"
              :plain="page !== page_num ? true : false"
              class="text-caption text-sm-body-1 mx-1 mx-sm-2"
              :class="page === page_num ? 'secondary white--text' : 'secondary--text'"
            >
              {{ page }}
            </v-btn>
          </div>
          <v-btn
            @click="next_page()"
            :disabled="page_num === Math.ceil(cms.length / 6) ? true : false"
            icon
            plain
            class="text-body-1 ml-2"
          >
            <v-icon class="ml-1">mdi-chevron-right</v-icon>
          </v-btn>
        </div>
      </v-responsive>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  props: ['cms'],
  data() {
    return {
      page_num: 1,
      panel: Array(6).fill(null),
      num1: 1,
      num2: 2,
      num3: undefined,
    }
  },
  created() {
    if(this.$route.query.number) {
      this.panel[this.$route.query.number] = 0
    }
  },
  mounted() {
    const num = this.$route.query.number
    if(num) {
      this.$vuetify.goTo('#this' + num)
    }
  },
  methods: {
    // ページ数ボタン
    page_switching(n) {
      this.page_num = n
      this.panel.fill(null)
      window.scrollTo(0, 0)
      this.$vuetify.goTo('#news')
    },
    // 次へボタン
    next_page() {
      this.page_num ++
      this.panel.fill(null)
      window.scrollTo(0,0)
      this.$vuetify.goTo('#news')
    },
    // 前へボタン
    prev_page() {
      this.page_num --
      this.panel.fill(null)
      window.scrollTo(0,0)
      this.$vuetify.goTo('#news')
    }
  },
  computed: {
    // 足し算
    plus_num(){
      const data = this.num1 + this.num2
      return data
    }
  },
}
</script>