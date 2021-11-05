<template>
  <v-sheet id="meal" class="bg_2 py-6 py-md-16">
		<v-container class="px-1 px-sm-3">
      <div class="text-center mx-3">
				<h2 style="letter-spacing: 4px !important; margin-left: 4px;" class="d-inline-flex text-h4 text-lg-h2 tertiary--text">MEAL</h2>
				<div class="font-weight-bold">食事</div>
      </div>
			<v-responsive max-width="900" class="text-center mx-3 mx-sm-auto mt-6">
        <div class="text-body-2 text-lg-body-1 font-weight-bold textbase--text">
          バーベキュー（焼肉）コース、又は洋食メニューになります。<br>
          風の強い日や冬などは洋食メニューをレストランでお出しいたします。客室のウッドデッキで出来るのでお子様連れでも気がねなく楽しめると思います。
        </div>
			</v-responsive>
      <v-row max-width="900" class="mx-auto justify-center mt-6 mb-0">
        <v-col
          v-for="(item, i) in features"
          :key="i"
          cols="12"
          sm="6"
          xl="4"
          class="pa-0 px-sm-3"
          :class="{'mt-3 mt-sm-6 mt-xl-0': i === 2, 'mt-3 mt-sm-0': i === 1}"
        >
          <v-card height="100%" class="tertiary--text text-center py-6 px-3 px-sm-6">
            <div class="h-full black--text">
              <v-img :src="item.image" :aspect-ratio="3/2" class="rounded-0 my-0" />
              <div
                :style="{'background-color': [item.type === '夕食' ? '#da712b' : '#2b85da']}"
                class="d-inline-flex align-center text-caption text-lg-body-1 font-weight-bold white--text mt-3 px-2"
              >
                {{ item.type }}
                <span class="text-caption text-lg-bod-1 ml-1">-{{item.type === '夕食' ? 'Dinner' : 'Breakfast'}}-</span>
              </div>
              <div class="text-body-1 text-sm-h6 text-lg-h4 font-weight-bold mt-lg-2">{{ item.title }}</div>
              <div class="text-caption text-sm-subtitile-1 text-lg-h6 font-weight-bold textbase--text">￥{{ item.fee }} × 人数</div>
              <div v-html="item.discription" class="text-caption text-lg-body-1 font-weight-bold tertiary--text mt-3" />
            </div>
          </v-card>
        </v-col>
      </v-row>
		</v-container>
  </v-sheet>
</template>

<script>
export default {
	data() {
		return {
			features: [{
				image: '/images/card2-a0/dinner-1.jpg',
				type: '夕食',
				title: 'BBQセット ＋ 飲み物',
				fee: '3,300',
        discription: 'お肉・魚介類・お野菜たっぷりBBQセットにフルーツ・デザートもついて大満足の夕食でございます。各お部屋のウッドデッキからゆっくりお楽しみいただけます。（※悪天候の際は、レストランにて洋食セットになります。）'
			}, {
				image: '/images/card2-a0/dinner-2.jpg',
				type: '夕食',
				title: '洋食セット ＋ 飲み物',
				fee: '3,300',
				discription: 'お肉料理を中心にした和洋折衷料理です。<br>ライス・サラダ・スープ・デザート・ドリンク付き（苦手なものがある方は、事前にご相談ください）'
			}, {
				image: '/images/card2-a0/breakfast.jpg',
				type: '朝食',
				title: '朝食セット',
				fee: '330',
				discription: 'トースト、ベーコンエッグ、ソーセージ、サラダetc…<br>和朝食ご希望の方はご予約時にお伝えください。<br>＊朝食は予約制でお時間になりましたら喫茶店で提供いたします。'
			}]
		}
	}
}
</script>