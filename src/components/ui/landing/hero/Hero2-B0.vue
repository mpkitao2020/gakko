<template>
  <v-sheet>
    <slot />
    <v-responsive :max-height="$vuetify.breakpoint.mdAndUp ? 'calc((100vh - 160px) / 2)' : '400'">
      <v-img
        :src="image"
        position="center 70%"
        :max-height="$vuetify.breakpoint.mdAndUp ? 'calc((100vh - 160px) / 2)' : '400'"
      />
    </v-responsive>
    <v-container>
      <div class="d-sm-inline-flex text-h5 text-sm-h4 font-weight-regular align-center text-center text-sm-left">
        <div>{{ en_title }}</div>
        <div class="w-full text-body-1 font-weight-bold primary--text ml-sm-3">{{ ja_title }}</div>
      </div>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  props: ['ja_title', 'en_title', 'image']
}
</script>