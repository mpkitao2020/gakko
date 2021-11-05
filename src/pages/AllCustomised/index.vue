<template>
  <div>
    <all-heros />
    <all-abouts />
    <all-blanks />
    <all-cards />
    <all-carousels />
    <all-contacts />
    <all-features />
    <all-greetings />
    <all-informations />
    <all-inserts />
    <all-maps />
    <all-menus />
    <all-navigations />
    <all-news />
    <all-footers />
    <scroll-to-top />
  </div>
</template>

<script>
import AllHeros from '../../components/ui/landing/hero/AllHeros.vue'
import AllAbouts from '../../components/ui/landing/about/AllAbouts.vue'
import AllBlanks from '../../components/ui/landing/blank/AllBlanks.vue'
import AllCards from '../../components/ui/landing/card/AllCards.vue'
import AllCarousels from '../../components/ui/landing/carousel/AllCarousels.vue'
import AllContacts from '../../components/ui/landing/contact/AllContacts.vue'
import AllFeatures from '../../components/ui/landing/feature/AllFeatures.vue'
import AllGreetings from '../../components/ui/landing/greeting/AllGreetings.vue'
import AllInformations from '../../components/ui/landing/information/AllInformations.vue'
import AllMaps from '../../components/ui/landing/map/AllMaps.vue'
import AllMenus from '../../components/ui/landing/menu/AllMenus.vue'
import AllNavigations from '../../components/ui/landing/navigation/AllNavigations.vue'
import AllNews from '../../components/ui/landing/news/AllNews.vue'
import AllFooters from '../../components/ui/landing/footer/AllFooters.vue'
import ScrollToTop from '../../components/navigation/ScrollToTop.vue'

export default {
  components: {
    AllHeros,
    AllAbouts,
    AllBlanks,
    AllCards,
    AllCarousels,
    AllContacts,
    AllFeatures,
    AllGreetings,
    AllInformations,
    AllMaps,
    AllMenus,
    AllNavigations,
    AllNews,
    AllFooters,
    ScrollToTop
  }
}
</script>