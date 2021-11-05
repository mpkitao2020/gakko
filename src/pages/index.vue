<template>
  <div>
    <gakko />
    <shumi />
    <tokugi />
    <dekigoto />
    <seikaku />
  </div>
</template>

<script>
import gakko from '../components/ui/landing/school/gakko.vue'
import shumi from '../components/ui/landing/school/shumi.vue'
import tokugi from '../components/ui/landing/school/tokugi.vue'
import dekigoto from '../components/ui/landing/school/dekigoto.vue'
import seikaku from '../components/ui/landing/school/seikaku.vue'

export default {
  components: {
    gakko,
    shumi,
    tokugi,
    dekigoto,
    seikaku,
  },
}
</script>