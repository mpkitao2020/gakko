<template>
  <v-sheet id="facility" class="py-6 py-md-16">
    <v-container class="px-1 px-sm-3">
      <div class="text-center">
				<h2
          style="letter-spacing: 4px !important"
          class="d-inline-flex text-h4 text-lg-h2 tertiary--text ml-1"
        >
          FACILITY
        </h2>
				<div class="font-weight-bold">設備</div>
      </div>
      <v-responsive max-width="900" class="mx-auto">
      <v-row class="justify-center mx-auto mt-6">
        <v-col
          v-for="(item, i) in features"
          :key="i"
          cols="4"
          sm="3"
          lg="3"
          class="px-1 px-sm-3"
        >
          <div max-width="300" class="text-center">
            <v-icon class="text-h3 text-sm-h2 text-md-h1">{{ item.icon }}</v-icon>
            <div class="text-caption text-sm-body-1 font-weight-bold textbase--text mt-3">{{ item.title }}</div>
          </div>
        </v-col>
      </v-row>
      </v-responsive>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      features: [{
        icon: 'mdi-toothbrush',
        title: '各種アメニティー'
      }, {
        icon: 'mdi-hair-dryer',
        title: 'ドライヤー'
      }, {
        icon: 'mdi-hanger',
        title: 'ガウン'
      }, {
        icon: 'mdi-kettle-steam',
        title: 'ポット'
      }, {
        icon: 'mdi-fridge',
        title: '冷蔵庫'
      }, {
        icon: 'mdi-microwave',
        title: '電子レンジ'
      }, {
        icon: 'mdi-wifi',
        title: 'Wi-Fi敷地内OK!'
      }]
    }
  }
}
</script>
