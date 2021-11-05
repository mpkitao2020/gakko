<template>
  <div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Footer1-A
      </div>
      <footer-1-a-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Footer1-B
      </div>
      <footer-1-b-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Footer1-C
      </div>
      <footer-1-c-0 />
    </div>
  </div>
</template>

<script>
import Footer1A0 from './Footer1-A0.vue'
import Footer1B0 from './Footer1-B0.vue'
import Footer1C0 from './Footer1-C0.vue'

export default {
  components: {
    Footer1A0,
    Footer1B0,
    Footer1C0
  }
}
</script>