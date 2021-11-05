<template>
  <div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Information1-A
      </div>
      <information-1-a-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Information1-B
      </div>
      <information-1-b-0 />
    </div>
  </div>
</template>

<script>
import Information1A0 from './Information1-A0.vue'
import Information1B0 from './Information1-B0.vue'
export default {
  components: {
    Information1A0,
    Information1B0
  }
}
</script>