<template>
  <v-sheet id="room" class="background py-6 py-md-16">
    <v-container>
      <div class="text-center mx-3">
				<h2 class="text-h3 text-lg-h2">ROOM</h2>
				<div class="font-weight-bold body-2 tertiary--text">客室</div>
      </div>
			<div v-for="(item, i) in features" :key="i" class="mt-12">
				<v-responsive max-width="1064" class="mx-auto text-center">
					<h3 class="text-h4">{{ item.type }}</h3>
					<v-divider class="mt-3" />
					<div class="mt-3">
						<div width="150px" class="d-inline-flex px-6">
							<div class="text-subtitle-1">間取り
								<span class="text-h6 ml-3">{{ item.area }}</span>
							</div>
						</div>
						<div width="150px" class="d-inline-flex px-6">
							<div class="py-0">
								<div class="text-subtitle-1">定員
									<span class="text-h6 ml-3">{{ item.capacity }}</span>
								</div>
							</div>
						</div>
					</div>
				</v-responsive>
        <v-row class="mx-auto mt-3 mb-0">
          <v-col
            v-for="(img, k) in item.image"
            :key="k"
            cols="12"
            xl="4"
            class="text-center"
          >
			      <v-img :src="img" :aspect-ratio="3/2" class="image" />
          </v-col>
        </v-row>
			</div>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      features: [{
        image: [
					'/images/feature1-a0/room1_1.jpg',
					'/images/feature1-a0/room1_2.jpg',
					'/images/feature1-a0/room1_3.jpg'
				],
				type: 'ツインタイプ（1部屋）',
				area: '〇〇㎡',
				capacity: '2名',
				fee: '￥8,800円',
				others: '追加分　小学生～1名につき2,000円（幼児以下は無料）<br>＊年末年始、GW等は料金が変わることがございます。'
      }, {
        image: [
					'/images/feature1-a0/room2_1.jpg',
					'/images/feature1-a0/room2_2.jpg',
					'/images/feature1-a0/room2_3.jpg'
				],
				type: 'ダブルタイプ（2部屋）',
				area: '〇〇㎡',
				capacity: '2名',
				fee: '￥8,800円',
				others: '追加分　小学生～1名につき2,000円（幼児以下は無料）<br>＊年末年始、GW等は料金が変わることがございます。'
      }]
    }
  }
}
</script>