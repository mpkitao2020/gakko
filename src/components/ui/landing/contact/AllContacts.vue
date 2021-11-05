<template>
  <div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Contacts1-A
      </div>
      <contact-1-a-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Contacts1-B
      </div>
      <contact-1-b-0 />
    </div>
    <div class="elevation-6 mt-8 mb-3">
      <div class="float-left text-body-1 white--text blue-grey darken-3 rounded-t mt-n5 ml-2 py-1 px-4">
        >> Contacts1-C
      </div>
      <contact-1-c-0 />
    </div>
  </div>
</template>

<script>
import Contact1A0 from './Contact1-A0.vue'
import Contact1B0 from './Contact1-B0.vue'
import Contact1C0 from './Contact1-C0.vue'
export default {
  components: {
    Contact1A0,
    Contact1B0,
    Contact1C0
  }
}
</script>