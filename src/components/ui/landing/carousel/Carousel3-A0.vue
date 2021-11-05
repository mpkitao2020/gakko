<template>
  <v-sheet class="background py-6 py-md-16">
    <v-container>
      <div elevation="6" class="white pa-2"> <!-- 白枠が不要な場合はここの"white pa-2"を削除 -->
        <v-carousel
          v-model="model"
          :show-arrows-on-hover="true"
          cycle
          interval="3000"
          height="100%"
          hide-delimiter-background
          light
        >
          <v-carousel-item v-for="(item, i) in carousel" :key="i">
            <div height="100%">
              <v-responsive class="mx-auto text-center">
                <v-img :src="item.image" :aspect-ratio="16/9" />
              </v-responsive>
            </div>
          </v-carousel-item>
        </v-carousel>
      </div>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data: () => ({
    model: 0,
    carousel: [{
      image: '/images/carousel3-a0/carousel-1.jpg',
    },{
      image: '/images/carousel3-a0/carousel-2.jpg',
    },{
      image: '/images/carousel3-a0/carousel-3.jpg',
    },{
      image: '/images/carousel3-a0/carousel-4.jpg',
    },{
      image: '/images/carousel3-a0/carousel-5.jpg',
    }]
  })
}
</script>
