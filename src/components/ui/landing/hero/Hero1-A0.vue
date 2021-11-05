<template>
  <v-sheet>
    <v-img
      src="/images/hero1-a0/bg.jpg"
      :max-height="$vuetify.breakpoint.mdAndUp ? 'calc(100vh - 80px)' : '450'"
      class="align-center"
    >
      <v-img
        v-if="$vuetify.breakpoint.mdAndUp"
        src="/images/hero1-a0/logo-large.png"
        width="500"
        height="500"
        contain
        class="mx-auto"
      />
      <v-img
        v-if="$vuetify.breakpoint.sm"
        src="/images/hero1-a0/logo-medium.png"
        max-width="400"
        max-height="400"
        contain
        class="mx-auto"
      />
      <v-img
        v-if="$vuetify.breakpoint.xs"
        src="/images/hero1-a0/logo-small.png"
        width="300"
        height="300"
        contain
        class="my-6 mx-auto"
      />
    </v-img>
    <slot />
  </v-sheet>
</template>
