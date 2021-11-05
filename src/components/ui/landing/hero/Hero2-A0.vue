<template>
  <v-sheet>
    <slot />
    <v-responsive height="400">
      <v-img
        src="/images/hero2-a0/bg.jpg"
        height="400"
        position="center 70%"
        class="text-center align-center"
      >
        <h1
          style="filter: drop-shadow(0 0 15px black);"
          class="text-h4 text-sm-h3 text-md-h2 text-lg-h1 white--text"
        >
          {{ en_titiel }}
        </h1>
        <h2 class="text-h6 text-sm-h5 font-weight-bold px-6 d-inline-flex white--text tertiary">{{ ja_title }}</h2>
      </v-img>
    </v-responsive>
  </v-sheet>
</template>

<script>
export default {
  props: ['ja_title', 'en_title']
}
</script>
