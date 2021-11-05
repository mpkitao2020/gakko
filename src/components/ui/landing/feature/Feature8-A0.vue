<template>
  <v-sheet class="background py-4 py-sm-8">
    <v-container>
      <div style="letter-spacing: 8px !important" class="d-flex justify-center text-subtitle-1 text-lg-h5 font-weight-medium primary--text">
        <div>
          <span style="padding-left: 8px">
            院内紹介
          </span>
          <v-divider color="primary" class="mt-1" />
        </div>
      </div>
      <v-responsive max-width="900" class="mx-auto mt-6">
        <v-img :src="mainImage" :aspect-ratio="16/9" transition="scroll-y-transition" />
        <div class="text-h6 font-weight-medium ml-3 pt-3 pb-1">{{ mainTitle }}</div>
        <v-divider style="border-bottom: 1px solid black" />
        <v-slide-group mandatory center-active show-arrows class="mt-3">
          <v-slide-item
            v-for="(item, i) in contents"
            :key="i"
            v-slot:default="{ active, toggle }"
          >
            <v-card
              @click="toggle"
              style="padding: 2px"
              class="transparent mx-1 mx-sm-3"
              :class="[ active ? 'primary lighten-2' : 'transparent' ]"
              flat
              tile
            >
              <v-overlay
                absolute
                :value="active"
                color="primary"
                opacity=".3"
              />
              <v-img
                :src="item.thumb"
                :width="$vuetify.breakpoint.smAndUp ? '120' : '80'"
                :aspect-ratio="3/2"
                contain
                @click="change_main_img(i)"
              />
            </v-card>
          </v-slide-item>
        </v-slide-group>
      </v-responsive>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data () {
    return {
      mainTitle: '受付',
      mainImage: '/images/feature8-a0/reception.jpg',
      contents: [{
          title: '受付',
          image: '/images/feature8-a0/reception.jpg',
          thumb: '/images/feature8-a0/reception-thumb.jpg'
      },{
          title: '外観',
          image: '/images/feature8-a0/outside.png',
          thumb: '/images/feature8-a0/outside-thumb.png'
      },{
          title: '待合室',
          image: '/images/feature8-a0/lobby.jpg',
          thumb: '/images/feature8-a0/lobby-thumb.jpg'
      },{
          title: '診察室',
          image: '/images/feature8-a0/consultation-room.png',
          thumb: '/images/feature8-a0/consultation-room-thumb.png'
      },{
          title: '処置室（内科）',
          image: '/images/feature8-a0/treatment-room-1.png',
          thumb: '/images/feature8-a0/treatment-room-1-thumb.png'
      },{
          title: '処置室（歯科）',
          image: '/images/feature8-a0/treatment-room-2.png',
          thumb: '/images/feature8-a0/treatment-room-2-thumb.png'
      },{
          title: '手術室',
          image: '/images/feature8-a0/operating-room.png',
          thumb: '/images/feature8-a0/operating-room-thumb.png'
      }]
    }
  },
  methods: {
    change_main_img(num) {
      this.mainTitle = this.contents[num].title
      this.mainImage = this.contents[num].image
    }
  }
}
</script>
