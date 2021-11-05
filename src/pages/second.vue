<template>
  <div>
    <sample />
    <gakko2 />
    <profile />
    <seikaku2 />
    <tokugi2 />
    <dekigoto2 />
    <shumi3 />
  </div>
</template>

<script>
import sample from '../components/ui/landing/school/sample.vue'
import gakko2 from '../components/ui/landing/second/gakko2.vue'
import profile from '../components/ui/landing/second/profile.vue'
import shumi3 from '../components/ui/landing/second/shumi3.vue'
import tokugi2 from '../components/ui/landing/second/tokugi2.vue'
import dekigoto2 from '../components/ui/landing/second/dekigoto2.vue'
import seikaku2 from '../components/ui/landing/second/seikaku2.vue'

export default {
  components: {
    sample,
    gakko2,
    profile,
    shumi3,
    tokugi2,
    dekigoto2,
    seikaku2,
  },
}
</script>