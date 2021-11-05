
<template>
  <div>
    <v-btn
      v-for="(item, i) in toolbar"
      :key="i"
      @click="active = item.component"
      height="40"
      tile
      :outlined="item.component !== active"
      style="border-width: 0 2px 2px"
      :style="{ padding: item.component !== active ? '0 30px' : '0 32px'}"
      color="blue-grey darken-3"
      class="text-body-1 white--text rounded-b ml-2"
    >
      {{ item.btn }}
    </v-btn>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Hero1-A
      </div>
      <hero-1-a-0>
        <v-fade-transition>
          <div
            :is="active"
            v-show="fade"
            v-scroll="onScroll"
          />
        </v-fade-transition>
      </hero-1-a-0>
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Hero1-B
      </div>
      <hero-1-b-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Hero2-A
      </div>
      <hero-2-a-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Hero2-B
      </div>
      <hero-2-b-0 />
    </div>
  </div>
</template>

<script>
import Toolbar1A0 from '../toolbar/Toolbar1-A0.vue'
import Toolbar1B0 from '../toolbar/Toolbar1-B0.vue'
import Toolbar1C0 from '../toolbar/Toolbar1-C0.vue'
import Hero1A0 from './Hero1-A0.vue'
import Hero1B0 from './Hero1-B0.vue'
import Hero2A0 from './Hero2-A0.vue'
import Hero2B0 from './Hero2-B0.vue'

export default {
  components: {
    Hero1A0,
    Hero1B0,
    Hero2A0,
    Hero2B0,
    Toolbar1A0,
    Toolbar1B0,
    Toolbar1C0
  },
  data() {
    return {
      toolbar: [{
        btn: '>> Toolbar1-A',
        component: 'toolbar-1-a-0'
      },{
        btn: '>> Toolbar1-B',
        component: 'toolbar-1-b-0'
      },{
        btn: '>> Toolbar1-C',
        component: 'toolbar-1-c-0'
      }],
      active: 'toolbar-1-a-0',
      fade: true
    }
  },
  methods: {
    onScroll () {
      const top = (
        window.pageYOffset ||
          document.documentElement.offsetTop ||
          0
      )

      this.fade = top < 300
    },
  }
}
</script>