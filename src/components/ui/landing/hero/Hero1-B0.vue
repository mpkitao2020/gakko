<template>
  <v-sheet>
    <v-carousel
      v-model="model"
      :show-arrows="false"
      cycle
      interval="5000"
      :height="$vuetify.breakpoint.mdAndUp ? 'calc(100vh - 160px)' : 'auto'"
      hide-delimiter-background
      light
    >
      <v-carousel-item v-for="item in carousel" :key="item.image">
        <v-img :src="item.image" :position="item.position" :aspect-ratio="16/9" />
      </v-carousel-item>
    </v-carousel>
    <slot />
  </v-sheet>
</template>

<script>

export default {
  data: () => ({
    model: 0,
    carousel: [{
      image: '/images/hero1-b0/carousel-1.jpg',
      position: 'top'
    },{
      image: '/images/hero1-b0/carousel-2.jpg',
      position: 'center'
    },{
      image: '/images/hero1-b0/carousel-3.jpg',
      position: 'bottom'
    },{
      image: '/images/hero1-b0/carousel-4.jpg',
      position: 'center 20%'
    }]
  })
}
</script>
