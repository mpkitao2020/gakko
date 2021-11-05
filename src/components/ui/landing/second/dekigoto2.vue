<template>
  <v-sheet id="history" class="py-6 py-sm-16">
    <v-container class="px-2">
      <div class="d-flex">
        <v-divider class="my-3 senary" />
        <div class="text-center mx-3">
          <h2 class="text-h3 text-lg-h2">歴史</h2>
          <div class="font-weight-bold body-2 senary--text">History</div>
        </div>
        <v-divider class="my-3 senary" />
      </div>
      <!-- 出来事 -->
      <v-responsive max-width="900" class="mt-6 mx-auto">
        <v-divider style="padding-top: 2px" class="senary mx-1 mt-3" />
        <div class="text-h5 font-weight-medium mt-1 ml-3">主な出来事</div>
         <v-divider class="senary mt-1 mx-1 mb-3" /> <!-- mb -->
        <v-row
          v-for="(item, i) in occurent"
          :key="i"
          justify="center"
          align="center"
          class="my-0 mx-2"
        >
          <v-col cols="12" sm="3" offset-sm="1" class="text-subtitle-1 font-weight-bold text-center text-sm-left mt-2 mt-sm-0 pa-0 pa-sm-2" @click="overlay = {...item}">
            {{item.title}}
          </v-col>
          <v-col cols="12" sm="7" class="text-body-1 text-center text-sm-left pa-0 pa-sm-2" @click="overlay = {...item}">
            {{item.text}}
          </v-col>
          <v-col cols="12" sm="1" class="text-body-1 text-center text-sm-left pa-0" @click="overlay = {...item}">
            <v-icon v-text="'mdi-cursor-default-click-outline'"  class="ml-2"/>
          </v-col>
        </v-row>
      </v-responsive>
    </v-container>
    <v-overlay
      z-index="7"
      :opacity=".6"
      :value="overlay.title !== null"
    >
      <v-btn
        icon
        absolute
        style="z-index:1; top:-18px; right: 4px;"
        elevation="0"
        @click="overlay.title = null"
        class="white--text senary"
        color="white"
      >
        <v-icon v-text="'mdi-close'" />
      </v-btn>
      <v-card width= '60vw' max-height="60vh" class="overflow-y-auto mx-3 pa-sm-6 pa-3" color="white">
        <div class="d-flex flex-column" >
          <div class="text-body-1 senary--text">{{ overlay.title }}</div>
          <div class="text-h5 text-md-h4 font-weight-bold senary--text">{{ overlay.text }}</div>
          <v-img :src="overlay.image" :aspect-ratio="16/9" class="mt-6" />
        </div>

      </v-card>
    </v-overlay>
  </v-sheet>
</template>

<script>
export default {
  data(){
    return {
      overlay: {
        title: null,
        text: null,
        image: null,
      },
      occurent:[{
        title:"2010年8月",
        text:"現代表と現副代表の２名でフリーランスとして活動開始",
        image:"/images/school/person4.jpg",
      },{
        title:"2011年6月",
        text:"企画・営業担当が加入",
        image:"/images/school/person4.jpg",
      },{
        title:"2011年12月",
        text:"モバゲー向けソーシャルゲーム事業に参入",
        image:"/images/school/person4.jpg",
      },{
        title:"2012年9月",
        text:"GREE、DMM向けソーシャルゲーム事業に参入",
        image:"/images/school/person4.jpg",
      },{
        title:"2013年8月",
        text:"Webシステム開発事業に本格的に参入",
        image:"/images/school/person4.jpg",
      },{
        title:"2014年4月",
        text:"株式会社MagicPlusとして役員3名で法人化",
        image:"/images/school/person4.jpg",
      },{
        title:"2017年5月",
        text:"事務所を鳥取市富安へ移転",
        image:"/images/school/magicplus.jpg",
      },{
        title:"2018年12月",
        text:"事務所を鳥取市吉成南町へ移転",
        image:"/images/school/magicplus.jpg",
      }]
    }
  }
}
</script>
