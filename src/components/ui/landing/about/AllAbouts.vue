<template>
  <div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> About1-A
      </div>
      <about-1-a-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> About1-B
      </div>
      <about-1-b-0 />
    </div>
  </div>
</template>

<script>
import About1A0 from './About1-A0.vue'
import About1B0 from './About1-B0.vue'
export default {
  components: {
    About1A0,
    About1B0
  }
}
</script>