<template>
  <div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Blank1-A
      </div>
      <blank-1-a-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Blank1-B
      </div>
      <blank-1-b-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Blank2-A
      </div>
      <blank-2-a-0 />
    </div>
  </div>
</template>

<script>
import Blank1A0 from './Blank1-A0.vue'
import Blank1B0 from './Blank1-B0.vue'
import Blank2A0 from './Blank2-A0.vue'
export default {
  components: {
    Blank1A0,
    Blank1B0,
    Blank2A0
  }
}
</script>