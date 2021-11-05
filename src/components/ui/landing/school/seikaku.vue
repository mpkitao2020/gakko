<template>
  <v-sheet id="personality" class="py-6 py-sm-16">
    <v-container class="px-0 px-sm-3">
      <div class="text-center mx-3">
				<h2 style="letter-spacing: 4px !important; margin-left: 4px;" class="d-inline-flex text-h4 text-lg-h3 ">性格</h2>
				<div class="text-body-2 font-weight-bold tertiary--text">Personality</div>
      </div>
        <v-card
          max-width="900"
          class="tertiary--text mx-2 mx-auto mt-6 py-6 px-3 pa-sm-12"
          outlined
        >
          <div class="black--text text-center text-sm-left">
            <div class="d-sm-flex justify-space-between align-center">
              <div class="text-h6 text-sm-h5 font-weight-bold">
                向上心が強いです
              </div>
            </div>
            <v-divider class="my-1 my-sm-3 tertiary" />
            <div class="text-body-2 font-weight-bold tertiary--text py-3 d-flex justify-center">
              この業界は技術の代わりが目まぐるしい。<br>先月まで使えていた技術が古くなったりだとか…<br>向上心がなかったら絶対やっていけないですね。<br>今日身につけた知識が未来永劫使えるということはほぼ無いので。<br>学ぶこと・学ぶ機会を止めないことがとても大切です。
            </div>
          </div>
        </v-card>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      overlay_img: null
    }
  },
}
</script>