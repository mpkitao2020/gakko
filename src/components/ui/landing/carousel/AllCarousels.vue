<template>
  <div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Carousel1-A
      </div>
      <carousel-1-a-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Carousel1-B
      </div>
      <carousel-1-b-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Carousel2-A
      </div>
      <carousel-2-a-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Carousel3-A
      </div>
      <carousel-3-a-0 />
    </div>
  </div>
</template>

<script>
import Carousel1A0 from './Carousel1-A0.vue'
import Carousel1B0 from './Carousel1-B0.vue'
import Carousel2A0 from './Carousel2-A0.vue'
import Carousel3A0 from './Carousel3-A0.vue'
export default {
  components: {
    Carousel1A0,
    Carousel1B0,
    Carousel2A0,
    Carousel3A0
  }
}
</script>