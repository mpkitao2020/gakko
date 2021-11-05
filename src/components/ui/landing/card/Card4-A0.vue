<template>
  <v-sheet class="background py-6 py-md-16">
    <v-container>
      <div class="text-center">
        <div style="line-height: 2em" class="text-h6 text-md-h4 font-weight-medium">
          こころを込めたサービスで、様々なシーン・ご要望にお応え致します。
        </div>
      </div>
      <v-row class="justify-center ma-0 mt-6">
        <v-col
          v-for="(item, i) in card"
          :key="i"
          cols="4"
          md="3"
          lg="2"
          class="text-center pa-0"
        >
          <v-btn
            :width="$vuetify.breakpoint.smAndUp ? '150' : '80'"
            x-small
            tile
            text
            @mouseenter="target = item.target"
            @click="$vuetify.goTo('#' + item.target)"
            class="text-caption text-sm-body-1 text-md-body-1 font-weight-bold px-sm-auto py-3 py-sm-auto"
            :class="[target === item.target ? 'senary white--text': 'senary--text']"
          >
            {{ item.title }}
          </v-btn>
        </v-col>
      </v-row>
      <v-expand-transition v-for="(item, i) in card" :key="i">
        <div v-show="target === item.target">
          <v-card :id="item.target" tile class="d-md-flex text-center">
            <div class="w-full w-md-half my-xl-auto pa-6 pa-sm-9">
              <div class="text-h6 font-weight-bold">
                <div class="text-h5 text-xl-h4 font-weight-bold">{{ item.title }}</div>
                <div class="text-body-2 text-md-caption font-weight-meduim senary--text">{{ item.subtitle }}</div>
                <div class="text-subtitle-2 text-xl-subtitle-1 font-weight-medium align-center mt-6">
                  <span v-html="item.text"/>
                </div>
              </div>
              <div class="d-sm-flex justify-center mt-6 mx-auto">
                <div v-for="(content, j) in item.details" :key="j" class="d-flex justify-center">
                  <v-divider v-if="j > 0" vertical class="d-none d-sm-block" />
                  <div class="px-3 px-lg-6">
                    <div class="text-caption font-weight-bold grey--text text--darken-1" :class="{'mt-3 mt-sm-0': j > 0}">{{ content[0] }}</div>
                    <div class="text-body-1 mt-sm-1">{{ content[1] }}</div>
                  </div>
                </div>
              </div>
            </div>
            <v-img :src="item.image" :aspect-ratio="4/3" height="auto" elevation="6" />
          </v-card>
        </div>
      </v-expand-transition>
    </v-container>
  </v-sheet>
</template>

<script>
  export default {
    data: () => ({
      card: [{
          title: 'お食事利用',
          subtitle: 'RENTAL SPACE',
          text: '鳥取ならではの新鮮な食材を使用した、<br>当店シェフこだわりの料理をご用意しております。<br>ご家族やご友人と、商談、ミーティング、お一人でのご利用にも最適な空間となっております。',
          details: [['席数', '40 席']],
          image: '/images/card4-a0/banquet.jpg',
          target: 'eatin'
        },{
          title: 'テイクアウト',
          subtitle: 'TAKEOUT',
          text: '場所を選ばずお店の味を。<br>宅配（有料）、テイクアウト限定メニューもあります♪<br>詳しくはメニューページをご覧ください。',
          details: [['平均待ち時間', '15分'], ['宅配サービス', 'あり（有料）']],
          image: '/images/card4-a0/takeout.jpg',
          target: 'takeout'
        },{
          title: '貸切利用',
          subtitle: 'RENTAL SPACE',
          text: '歓送迎会・結婚式の2次会はもちろん、<br>貸し切り専用のサブフロアでのライブ・会議室利用など、<br>様々なスタイルに対応可能です。<br>詳細やご相談等お気軽にお問い合わせ下さい。',
          details: [['面積', '250 ㎡'], ['収容人数', '150 人']],
          image: '/images/card4-a0/wedding.jpg',
          target: 'rental'
      }],
      target: 'eatin'  // target初期値
    }),
  }
</script>