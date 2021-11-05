<template>
  <div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Map1-A
      </div>
      <map-1-a-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Map1-B
      </div>
      <map-1-b-0 />
    </div>
  </div>
</template>

<script>
import Map1A0 from './Map1-A0.vue'
import Map1B0 from './Map1-B0.vue'
export default {
  components: {
    Map1A0,
    Map1B0
  }
}
</script>