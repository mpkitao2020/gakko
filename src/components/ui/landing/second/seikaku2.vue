<template>
  <v-sheet id="personality" class="py-6 py-md-16">
    <v-container class="px-2">
      <div class="d-flex">
        <v-divider class="my-3 senary" />
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">性格</h2>
          <div class="font-weight-bold body-2 senary--text">Personality</div>
        </div>
        <v-divider class="my-3 senary" />
      </div>
      <v-responsive max-width="900" class="mx-auto">
        <v-row class="justify-center mt-6 mb-0">
          <v-col md="8" class="py-0">
            <v-carousel
              cycle
              light
              interval="3000"
              height="500"
              :show-arrows="false"
              hide-delimiters
            >
              <v-carousel-item
                v-for="(item,i) in carousel"
                :key="i"
              >
                <v-card
                  max-width="900"
                  class="mx-2 mx-auto py-6 px-3 pa-sm-12"
                  outlined
                >
                  <div class="text-center text-sm-left">
                    <div class="d-sm-flex justify-space-between align-center">
                      <div class="black--text text-h6 text-sm-h5 font-weight-bold">
                        {{ item.title }}
                      </div>
                    </div>
                    <v-divider class="my-1 my-sm-3 senary" />
                    <div class="d-flex justify-center text-body-2 font-weight-bold senary--text py-3">
                      {{ item.text }}
                    </div>
                  </div>
                </v-card>
              </v-carousel-item>
            </v-carousel>
          </v-col>
        </v-row>
      </v-responsive>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data () {
    return {
      carousel: [
        {
          title:'向上心',
          text:'この業界は技術の代わりが目まぐるしい。<br>先月まで使えていた技術が古くなったりだとか…<br>向上心がなかったら絶対やっていけないですね。<br>今日身につけた知識が未来永劫使えるということはほぼ無いので。<br>学ぶこと・学ぶ機会を止めないことがとても大切です。',
        },
        {
          title:'負けず嫌い',
          text:'負けない負けない負けない',
        },
        {
          title:'真面目',
          text:'この業界は技術の代わりが目まぐるしい。<br>先月まで使えていた技術が古くなったりだとか…<br>向上心がなかったら絶対やっていけないですね。<br>今日身につけた知識が未来永劫使えるということはほぼ無いので。<br>学ぶこと・学ぶ機会を止めないことがとても大切です。',
        },
        {
          title:'感性豊か',
          text:'この業界は技術の代わりが目まぐるしい。<br>先月まで使えていた技術が古くなったりだとか…<br>向上心がなかったら絶対やっていけないですね。<br>今日身につけた知識が未来永劫使えるということはほぼ無いので。<br>学ぶこと・学ぶ機会を止めないことがとても大切です。',
        },
        {
          title:'好奇心旺盛',
          text:'この業界は技術の代わりが目まぐるしい。<br>先月まで使えていた技術が古くなったりだとか…<br>向上心がなかったら絶対やっていけないですね。<br>今日身につけた知識が未来永劫使えるということはほぼ無いので。<br>学ぶこと・学ぶ機会を止めないことがとても大切です。',
        }
      ]
    }
  }
}
</script>
