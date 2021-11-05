<template>
  <v-container class="py-10">
    <div style="width: 80px; height: 4px" class="mb-3 secondary" />
    <h2 class="text-h4 mb-3">お知らせ</h2>
    <v-row class="cardList">
      <v-col
        v-for="item in news"
        :key="item.id"
        cols="12"
        md="4"
        class="cardList_item"
      >
        <v-card class="pa-2">
          <v-img :src="item.img.url" height="200" class="rounded"></v-img>
          <div class="secondary--text text--lighten-1 text-caption d-flex mt-1">
            Apr 11, 2020 - 8 min read
          </div>

          <div class="pt-2 card_inner">
            <div class="title font-weight-bold text-h5">
              {{ item.title }}
            </div>

            <div class="secondary--text text--lighten-1 text-body-1 mt-1 mb-2" v-html="item.content" />

            <router-link
              :to="{path:'news', query:{ id: item.id }}"
              class="text-decoration-none accent--text font-weight-bold"
            >
              Read More
            </router-link>
          </div>
        </v-card>
      </v-col>
    </v-row>

    <slot />
  </v-container>
</template>

<script>
export default {
  props: {
    news: {
      type: Array,
      default: () => {}
    }
  },
  mounted() {
    const btn_item = document.querySelector('.btn_item')
    const cardList = document.querySelector('.cardList')

    if (btn_item) {
      btn_item.addEventListener('click', () => {
        cardList.classList.add('_show')
      })
    }
  }
}
</script>

<style lang="sass" scoped>
.v-card
  display: flex
  flex-direction: column
  height: 100%

.v-image
  flex: 0 0 auto

.card_inner
  display: flex
  flex-direction: column
  height: 100%

a
  margin-top: auto

.cardList
  &_item
    &:nth-of-type(n + 4)
      display: none
  &._show
    .cardList_item:nth-of-type(n + 4)
      display: block

.btn
  display: block
  text-align: center
  margin-top: 40px
</style>
