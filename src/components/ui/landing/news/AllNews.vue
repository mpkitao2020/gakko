<template>
  <div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> News1-A
      </div>
      <news-1-a-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> News1-B
      </div>
      <news-1-b-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> News1-C
      </div>
      <news-1-c-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> News2-A
      </div>
      <news-2-a-0 />
    </div>
  </div>
</template>

<script>
import News1A0 from './News1-A0.vue'
import News1C0 from './News1-C0.vue'
import News2A0 from './News2-A0.vue'
export default {
  components: {
    News1A0,
    News1C0,
    News2A0
  }
}
</script>