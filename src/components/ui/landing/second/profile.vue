<template>
  <v-sheet id="profile" class="background py-6 py-sm-16">
    <v-container class="px-2">
      <v-responsive max-width="900" class="mx-auto mt-3">
        <div class="d-flex">
          <v-divider class="my-3 senary" />
          <div class="text-center mx-3">
            <h2 class="text-h3 text-lg-h2">紹介</h2>
            <div class="font-weight-bold body-2 senary--text">Profile</div>
          </div>
          <v-divider class="my-3 senary" />
        </div>
      </v-responsive>
      <v-responsive max-width="900" class="mx-auto mt-6">
        <!-- 記事を表示 -->
        <v-expansion-panels
          v-for="(n, i) in news"
          :key="i"
          v-model="panel[i]"
          :id="'article' + i"
        >
          <v-expansion-panel
            class="text-center rounded-0 px-0 px-sm-6"
            :class="[{'mt-3': i !== 0}, panel[i] === 0 ? 'py-6' : 'py-1']"
          >
          <!-- 質問 -->
            <v-expansion-panel-header class="px-3 py-0">
              <v-row class="align-center ma-0 ml-3">
                <v-col cols="12" class="text-center pa-0">
                  <div class="text-body-2 text-sm-body-1">{{ news[i].title }}</div>
                </v-col>
              </v-row>
            </v-expansion-panel-header>
            <!-- 詳細 -->
            <v-expansion-panel-content>
              <v-divider class="mt-3" />
              <div class="text-caption text-sm-body-2 secondary--text mt-6 mx-0 mx-sm-12">{{ news[i].text }}</div>
            </v-expansion-panel-content>
          </v-expansion-panel>
        </v-expansion-panels>
      </v-responsive>
    </v-container>
  </v-sheet>
</template>

<script>
export default {
  data() {
    return {
      panel: [1,2,3,4,5,6],
      news: [{
        title: '生年月日',
        text: '2014年4月1日',
      },{
        title: '星座',
        text: 'おひつじ座',
      },{
        title: '学校名',
        text: '株式会社 Magic Plus',
      },{
        title: '好きな教科',
        text: '演劇・ゲーム',
      },{
        title: '好きな食べ物',
        text: '焼き肉・ラーメン',
      },
      ]
    }
  },
}
</script>
