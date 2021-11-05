<template>
  <v-sheet id="contact" class="background py-6 py-md-16">
    <v-container>
      <div class="d-flex justify-center">
        <div class="text-center">
          <h2 class="text-h3 font-weight-bold text-lg-h1">CONTACT</h2>
          <div class="text-body-2 font-weight-thin primary--text text--lighten-4">お問い合わせ</div>
        </div>
      </div>
      <v-responsive max-width="900" class="text-body-2 text-lg-body-1 font-weight-bold textbase--text text-center mx-auto mt-6">
        <div v-show="input || confirm">下記フォームからいただいたご相談・お問い合わせは、翌営業日中にご回答いたします。</div>
        <div v-show="input">必要事項に記入の上、「確認画面へ」ボタンを押してください。</div>
        <div v-show="confirm">入力内容を確認し、「送信」ボタンを押してください。</div>
        <div v-show="sending" class="text-h5 text-lg-h4 font-weight-bold">送信中. . .</div>
        <div v-show="succeeded" class="text-h5 text-lg-h4 font-weight-bold">お問い合わせを受け付けました。</div>
        <div v-show="succeeded" class="mt-3 mt-lg-6">入力いただいたメールアドレスへ、自動メールを送信しておりますのでご確認ください。<br>※ メールが届かない場合はお手数ですがお電話にてお問い合わせください。</div>
        <div v-show="failed" class="text-h5 text-lg-h4 font-weight-bold">送信エラー</div>
        <div v-show="failed" class="mt-3 mt-lg-6">エラーが発生しました。<br>もう一度フォームをご入力頂くか、お電話にてお問い合わせください。</div>
        <div>
          <v-btn
            v-show="failed"
            @click="$vuetify.goTo('#contact'); failed = false; input = true;"
            width="220"
            large
            rounded
            outlined
            color="octonary"
            class="mt-3 mt-lg-6"
          >
            フォーム再送信
          </v-btn>
        </div>
        <div class="mt-1">
          <v-btn
            v-show="failed"
            :href="'tel:' + info.phone"
            width="220"
            large
            rounded
            outlined
            color="octonary"
          >
            Tel. {{ info.phone }}
          </v-btn>
          <!-- <v-btn
            v-show="failed"
            href="tel:08019255636"
            width="220"
            large
            rounded
            outlined
            color="octonary"
          >
            Tel. {{ info.phone }}
          </v-btn> -->
        </div>
        <!-- {{ input ? '必要事項に記入の上、「確認画面へ」ボタンを押してください。' : '入力内容を確認し、「送信」ボタンを押してください。'}} -->
      </v-responsive>
      <v-responsive v-show="input || confirm" max-width="900" class="mt-6 mx-auto">
        <v-form
          ref="form"
          v-show="input"
          v-model="valid"
          class="font-weight-bold pt-1"
          lazy-validation
        >
          <!-- お名前 -->
          <v-row class="d-block d-sm-flex ma-0">
            <v-col cols="2" sm="1" class="d-flex justify-center order-0 mt-2 mb-1 pa-0">
              <div style="height: 24px" class="d-flex justify-center align-center text-subtitle-2 white--text red darken-1 w-full">必須</div>
            </v-col>
            <v-col cols="12" sm="11" class="mt-1 mt-sm-0 pa-0 pl-sm-2">
              <v-text-field
                v-model="name"
                :rules="[rules.required]"
                label="お名前"
                type="text"
                placeholder="例）山田　太郎"
                background-color="white"
                outlined
              />
            </v-col>
          </v-row>
          <!-- フリガナ -->
          <v-row class="d-block d-sm-flex ma-0">
            <v-col cols="2" sm="1" class="d-flex justify-center order-0 mt-2 mb-1 pa-0">
              <div style="height: 24px" class="d-flex justify-center align-center text-subtitle-2 white--text red darken-1 w-full">必須</div>
            </v-col>
            <v-col cols="12" sm="11" class="mt-1 mt-sm-0 pa-0 pl-sm-2">
              <v-text-field
                v-model="kana"
                :rules="[rules.required, rules.kana]"
                label="フリガナ"
                type="text"
                placeholder="例）ヤマダ　タロウ"
                background-color="white"
                outlined
              />
            </v-col>
          </v-row>
          <!-- 電話番号 -->
          <v-row class="d-block d-sm-flex ma-0">
            <v-col cols="2" sm="1" class="d-flex justify-center order-0 mt-2 mb-1 pa-0">
              <div style="height: 24px" class="d-flex justify-center align-center text-subtitle-2 white--text red darken-1 w-full">必須</div>
            </v-col>
            <v-col cols="12" sm="11" class="mt-1 mt-sm-0 pa-0 pl-sm-2">
              <v-text-field
                v-model="phone"
                :rules="[rules.required, rules.phone]"
                label="電話番号"
                type="text"
                placeholder="例）0857-51-1321"
                background-color="white"
                outlined
              />
            </v-col>
          </v-row>
          <!-- メールアドレス -->
          <v-row class="d-block d-sm-flex ma-0">
            <v-col cols="2" sm="1" class="d-flex justify-center order-0 mt-2 mb-1 pa-0">
              <div style="height: 24px" class="d-flex justify-center align-center text-subtitle-2 white--text red darken-1 w-full">必須</div>
            </v-col>
            <v-col cols="12" sm="11" class="mt-1 mt-sm-0 pa-0 pl-sm-2">
              <v-text-field
                v-model="email"
                :rules="[rules.required, rules.email]"
                label="メールアドレス"
                type="text"
                placeholder="例）passagesince@gmail.com"
                background-color="white"
                outlined
              />
            </v-col>
          </v-row>
          <!-- カテゴリー -->
          <v-row class="d-block d-sm-flex ma-0">
            <v-col cols="2" sm="1" class="d-flex justify-center order-0 mt-2 mb-1 pa-0">
              <div
                style="height: 24px"
                class="d-flex justify-center align-center text-subtitle-2 white--text red darken-1 w-full"
              >
                必須
              </div>
            </v-col>
            <v-col cols="12" sm="11" class="mt-2 pa-0 pl-sm-2">
              <v-select
                v-model="category"
                :items="['ご宿泊について', '焼き肉＆BBQのご予約について', 'その他お問い合わせ']"
                :rules="[rules.required]"
                label="カテゴリーを選択してください。"
                style="padding-left: 12px"
                class="mt-0 pt-0"
              />
            </v-col>
          </v-row>
          <!-- カテゴリーが選択されたら表示 -->
          <div v-show="!/^(その他お問い合わせ|undefined)$/.test(category)">
            <v-row class="d-block d-sm-flex ma-0">
              <v-col cols="2" sm="1" class="d-flex justify-center align-center mt-3 pa-0">
                <div style="height: 24px" class="d-flex justify-center align-center text-subtitle-2 white--text red darken-1 w-full">必須</div>
              </v-col>
              <v-col cols="12" sm="11" class="pa-0 pl-sm-2">
                <div class="text-h6 font-weight-bold mt-0 mt-sm-3">下記詳細をご入力ください。</div>
              </v-col>
            </v-row>
            <v-row class="ma-0">
              <!-- 日付 -->
              <v-col cols="12" sm="4" offset-sm="1" class="mt-3 pa-0 pl-sm-2">
                <v-menu
                  v-model="menu"
                  :close-on-content-click="true"
                  :return-value="date"
                  transition="scale-transition"
                  offset-y
                  min-width="auto"
                >
                  <template v-slot:activator="{ on, attrs }">
                    <v-text-field
                      v-model="date"
                      label="ご利用日"
                      readonly
                      v-bind="attrs"
                      v-on="on"
                    />
                  </template>
                  <v-date-picker
                    v-model="date"
                    :allowed-dates="allowed_date"
                    :day-format="date => new Date(date).getDate()"
                    locale="ja"
                    no-title
                    scrollable
                    class="pt-3"
                  >
                  </v-date-picker>
                </v-menu>
              </v-col>
              <v-col
                cols="6" sm="2"
                class="mt-0 mt-sm-3 pa-0 pr-2 pr-sm-0 pl-sm-2"
              >
                <!-- 宿泊日数 -->
                <v-select
                  v-show="category === 'ご宿泊について'"
                  v-model="days"
                  :items="[1, 2, 3, 4, 5, 6]"
                  :rules="category === 'ご宿泊について' ? [rules.required] : []"
                  label="宿泊日数"
                />
                <!-- 利用人数 -->
                <v-select
                  v-show="category === '焼き肉＆BBQのご予約について'"
                  v-model="heads"
                  :items="[0, 1, 2, 3, 4, 5, 6]"
                  :rules="category === '焼き肉＆BBQのご予約について' ? [rules.required] : []"
                  label="人数"
                  class="font-weight-bold"
                />
              </v-col>
            </v-row>
          </div>
          <!-- 条件：ご宿泊について選択時 -->
          <div v-show="category === 'ご宿泊について'">
            <!-- 部屋タイプ -->
            <v-row class="ma-0">
              <v-col cols="12" sm="7" offset-sm="1" class="pa-0 pl-sm-2">
                <v-select
                  v-model="room"
                  :items="['101号室　ダブル', '102号室　ダブル', '103号室　ツイン']"
                  :rules="category === 'ご宿泊について' ? [rules.required] : []"
                  label="部屋タイプ"
                />
              </v-col>
            </v-row>
            <!-- 人数（大人・子供・5歳以下） -->
            <v-row class="align-center ma-0">
              <v-col cols="4" sm="2" offset-sm="1" class="pa-0 pr-2 pr-sm-0 pl-sm-2">
                <v-select
                  ref="adults"
                  v-model="adults"
                  :items="[0, 1, 2, 3, 4, 5, 6]"
                  :rules="[rules_heads()]"
                  label="大人"
                />
              </v-col>
              <v-col cols="4" sm="2" class="pa-0 pr-2 pr-sm-0 pl-sm-2">
                <v-select
                  ref="kids"
                  v-model="kids"
                  :items="[0, 1, 2, 3, 4, 5, 6]"
                  :rules="[rules_heads()]"
                  label="子供"
                />
              </v-col>
              <v-col cols="4" sm="2" class="pa-0 pr-2 pr-sm-0 pl-sm-2">
                <v-select
                  ref="toddlers"
                  v-model="toddlers"
                  :items="[0, 1, 2, 3, 4, 5, 6]"
                  :rules="[rules_heads()]"
                  label="5歳以下"
                />
              </v-col>
              <v-col cols="12" sm="5" class="pa-0 pl-sm-6">
                <div>
                  <div class="text-body-1 font-weight-bold text-right text-sm-left">
                    合計
                    <span class="ml-3 mr-1">{{ heads }}</span>人
                  </div>
                  <div class="text-caption text-right text-sm-left">※ 犬同伴の場合（要相談）</div>
                </div>
                <div
                  v-show="!rules_heads()"
                  style="line-height: 12px"
                  class="text-caption font-weight-bold error--text text-right text-sm-left"
                >
                  合計1名以上選択してください。
                </div>
              </v-col>
            </v-row>
            <!-- 朝食・夕食 -->
            <v-row class="ma-0">
              <v-col cols="4" offset-sm="1" class="pa-0 pl-sm-2">
                <v-select
                  v-model="breakfast"
                  :items="['あり', 'なし']"
                  :rules="category === 'ご宿泊について' ? [rules.required] : []"
                  label="朝食"
                />
              </v-col>
              <v-col cols="8" sm="4" class="pa-0 pl-2">
                <v-select
                  v-model="dinner"
                  :items="['あり - 洋食メニュー', 'あり - BBQメニュー', 'なし']"
                  :rules="category === 'ご宿泊について' ? [rules.required] : []"
                  label="夕食"
                />
              </v-col>
            </v-row>
          </div>
          <!-- 条件：焼き肉＆BBQのご予約について選択時 -->
          <div v-show="category === '焼き肉＆BBQのご予約について'">
            <!-- コース -->
            <!-- <v-row class="ma-0">
              <v-col cols="12" sm="7" offset-sm="1" class="pa-0 pl-sm-2">
                <v-select
                  v-model="cource"
                  :items="['コース１', 'コース２', 'コース３']"
                  :rules="category === '焼き肉＆BBQのご予約について' ? [rules.required] : []"
                  label="コース"
                />
              </v-col>
            </v-row> -->
            <!-- オプション -->
            <!-- <v-row class="ma-0">
              <v-col cols="12" sm="7" offset-sm="1" class="pa-0 pl-sm-2">
                <v-select
                  v-model="options"
                  :items="['牛肉追加（2人前） ¥2,000', '豚肉追加（2人前） ¥2,000', '鶏肉追加（2人前） ¥2,000', '野菜セット追加（2人前） ¥1,000']"
                  label="オプション"
                  multiple
                  chips
                />
              </v-col>
            </v-row> -->
            <!-- お一人あたりのご予算 -->
            <v-row class="d-flex ma-0">
              <v-col cols="2" sm="1" class="d-flex justify-center order-0 mt-2 mb-1 pa-0">
                <!-- <div style="height: 24px" class="d-flex justify-center align-center text-subtitle-2 white--text red darken-1 w-full">必須</div> -->
              </v-col>
              <!-- <v-col cols="10" class="d-sm-none" /> -->
              <v-col cols="10" sm="5" class="d-inline-flex order-2 mt-1 mt-sm-0 pa-0 pl-sm-2">
                <v-text-field
                  v-model="budget"
                  :rules="category === '焼き肉＆BBQのご予約について' ? [rules.required, rules.budget] : []"
                  label="お一人当たりのご予算"
                  type="text"
                  background-color="white"
                  outlined
                />
              </v-col>
              <v-col cols="1" class="d-inline-flex align-center order-3 pa-0 pl-1 pl-sm-2">
                <div class="text-h5 font-weight-bold">円</div>
              </v-col>
              <v-col cols="10" sm="5" class="d-inline-flex order-1 order-sm-4 mt-2 mt-sm-0 pa-0 pl-2 pl-sm-0">
                <div class="text-caption text-sm-subtitle-2 font-weight-bold my-sm-auto">※ ¥3,000円～ご相談ください。</div>
              </v-col>
            </v-row>
          </div>
          <!-- その他お問い合わせ事項 -->
          <v-row class="d-block d-sm-flex ma-0 mt-3">
            <v-col cols="2" sm="1" class="d-flex justify-center order-0 mt-2 mb-1 pa-0">
              <!-- <div style="height: 24px" class="d-flex justify-center align-center text-subtitle-2 white--text red darken-1 w-full">必須</div> -->
            </v-col>
            <v-col cols="12" sm="11" class="mt-1 mt-sm-0 pa-0 pl-sm-2">
              <v-textarea
                v-model="others"
                :rules="category === 'その他お問い合わせ' ? [rules.required] : []"
                label="その他お問い合わせ事項"
                auto-grow
                background-color="white"
                outlined
                class="text-justify"
              />
            </v-col>
          </v-row>
        </v-form>
        <v-card v-show="confirm" class="py-6 px-3 pa-sm-12">
          <div class="text-h5 text-sm-h4 font-weight-regular text-center">
            お問い合わせ内容
          </div>
          <v-divider class="mt-3 mt-sm-6" />
          <v-row class="justify-center align-center ma-0 mt-6">
            <v-col cols="12" sm="4" class="align-self-end pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                お名前
              </div>
            </v-col>
            <v-col cols="12" sm="6" class="mt-1 mt-sm-0 pa-0">
              <div class="text-caption secondary--text text-center text-sm-left">
                {{ kana }}
              </div>
              <div class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left">
                {{ name }}
                <span class="ml-3">様</span>
              </div>
            </v-col>
            <v-col cols="12" sm="4" class="mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                電話番号
              </div>
            </v-col>
            <v-col cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left">
                {{ phone }}
              </div>
            </v-col>
            <v-col cols="12" sm="4" class="mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                メールアドレス
              </div>
            </v-col>
            <v-col cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left">
                {{ email }}
              </div>
            </v-col>
          </v-row>
          <v-divider class="mt-6" />
          <!-- 問い合わせ詳細 -->
          <div class="font-weight-bold text-center mt-6">
            ＜　{{ category }}　＞
          </div>
          <v-row class="justify-center align-center ma-0 mt-3">
            <!-- 日付（その他以外） -->
            <v-col v-if="category !== 'その他お問い合わせ'" cols="12" sm="4" class="mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                ご利用日
              </div>
            </v-col>
            <v-col v-if="category !== 'その他お問い合わせ'" cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left">
                {{ date.replace('-', ' 年 ').replace('-', ' 月 ') }} 日
              </div>
            </v-col>
            <!-- 人数（その他以外） -->
            <v-col v-if="category !== 'その他お問い合わせ'" cols="12" sm="4" class="mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                人数
              </div>
            </v-col>
            <v-col v-if="category !== 'その他お問い合わせ'" cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left">
                {{ heads }} 名
              </div>
            </v-col>
            <!-- 人数内訳（宿泊のみ） -->
            <v-col v-if="category === 'ご宿泊について'" cols="12" sm="6" offset-sm="4" class="pa-0">
              <div class="text-caption font-weight-medium secondary--text text-center text-sm-left">
                <span class="d-none d-sm-inline-flex">(</span>
                <span v-show="adults > 0" class="mx-1">大人 / {{ adults }}名</span>
                <span v-show="kids > 0" class="mx-1">子供 / {{ kids }}名</span>
                <br v-show="adults * kids > 0" class="d-sm-none">
                <span v-show="toddlers > 0" class="mx-1">5歳以下 / {{ toddlers }}名</span>
                <span class="d-none d-sm-inline-flex">)</span>
              </div>
            </v-col>
            <!-- 部屋タイプ（宿泊のみ） -->
            <v-col v-if="category === 'ご宿泊について'" cols="12" sm="4" class="mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                部屋タイプ
              </div>
            </v-col>
            <v-col v-if="category === 'ご宿泊について'" cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left">
                {{ room }}
              </div>
            </v-col>
            <!-- 滞在期間（宿泊のみ） -->
            <v-col v-if="category === 'ご宿泊について'" cols="12" sm="4" class="mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                滞在
              </div>
            </v-col>
            <v-col v-if="category === 'ご宿泊について'" cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left">
                {{ days }} 日間
              </div>
            </v-col>
            <!-- 朝食（宿泊のみ） -->
            <v-col v-if="category === 'ご宿泊について'" cols="12" sm="4" class="mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                朝食
              </div>
            </v-col>
            <v-col v-if="category === 'ご宿泊について'" cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left">
                {{ breakfast }}
              </div>
            </v-col>
            <!-- 夕食（宿泊のみ） -->
            <v-col v-if="category === 'ご宿泊について'" cols="12" sm="4" class="mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                夕食
              </div>
            </v-col>
            <v-col v-if="category === 'ご宿泊について'" cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left">
                {{ dinner }}
              </div>
            </v-col>
            <!-- 予算（食事のみ） -->
            <v-col v-if="category === '焼き肉＆BBQのご予約について'" cols="12" sm="4" class="mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                ご予算
              </div>
            </v-col>
            <v-col v-if="category === '焼き肉＆BBQのご予約について'" cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left">
                {{ budget }} 円 ／ 人
              </div>
            </v-col>
            <!-- コース（食事のみ） -->
            <!-- <v-col v-if="category === '焼き肉＆BBQのご予約について'" cols="12" sm="4" class="mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                コース
              </div>
            </v-col>
            <v-col v-if="category === '焼き肉＆BBQのご予約について'" cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left">
                {{ cource }}
              </div>
            </v-col> -->
            <!-- オプション（食事のみ） -->
            <!-- <v-col v-if="category === '焼き肉＆BBQのご予約について'" cols="12" sm="4" class="align-self-start mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                オプション
              </div>
            </v-col>
            <v-col v-if="category === '焼き肉＆BBQのご予約について'" cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div
                v-for="(item, i) in options"
                :key="i"
                class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left"
              >
                {{ options[i] }}
              </div>
            </v-col> -->
            <!-- その他問い合わせ -->
            <v-col v-if="others" cols="12" sm="4" class="align-self-start mt-3 pa-0">
              <div class="text-subtitle-1 font-weight-bold text-center text-sm-left">
                その他
              </div>
            </v-col>
            <v-col v-if="others" cols="12" sm="6" class="mt-1 mt-sm-3 pa-0">
              <div
                class="text-subtitle-1 font-weight-medium secondary--text text-center text-sm-left"
                :class="{ 'text-sm-left': category !== 'その他お問い合わせ' }"
              >
                <span style="white-space: pre-wrap">{{ others }}</span>
              </div>
            </v-col>
          </v-row>
        </v-card>
        <div :class="{'mt-3': input, 'mt-6': confirm}">
          <p class="text-subtitle-1 primary--text text-center">◆ 個人情報保護法に基づく弊社取り扱いポリシーのご案内</p>
          <p class="textbase--text text-center">このWebページ（お問合せフォーム）より当社宛に送信されるお客様の個人情報について、お客様への返信連絡の為の利用目的に特定しお取扱いたします。</p>
        </div>
        <v-row v-show="input" class="ma-0 mt-6">
          <v-col cols="12" class="text-center py-0">
            <div
              @click="$vuetify.goTo('#contact')"
              class="d-inline-flex"
            >
              <v-btn
                :disabled="!valid"
                submit
                x-large
                color="primary"
                @click="validate"
                tile
                class="w-full w-sm-auto"
              >
                確認画面へ<v-icon aria-hidden="false">mdi-chevron-right</v-icon>
              </v-btn>
            </div>
          </v-col>
        </v-row>
        <v-row v-show="confirm" class="ma-0 mt-6">
          <v-col cols="12" sm="6" class="py-0 pa-sm-0">
            <div
              @click="$vuetify.goTo('#contact')"
              class="d-sm-inline-flex"
            >
              <v-btn
                x-large
                color="primary"
                min-width="180"
                @click.prevent="back"
                tile
                class="w-full w-sm-auto"
              >
                <v-icon aria-hidden="false">mdi-chevron-left</v-icon>戻る
              </v-btn>
            </div>
          </v-col>
          <v-col cols="12" sm="6" class="text-right py-0 pa-sm-0">
            <div
              @click="$vuetify.goTo('#contact')"
              class="d-sm-inline-flex"
            >
              <v-btn
                submit
                x-large
                color="primary"
                min-width="180"
                @click.prevent="sendMail"
                tile
                class="w-full w-sm-auto mt-3 mt-sm-0"
              >
                送信<v-icon aria-hidden="false">mdi-chevron-right</v-icon>
              </v-btn>
            </div>
          </v-col>
        </v-row>
      </v-responsive>
    </v-container>
  </v-sheet>
</template>

<script>
import axios from 'axios'
import { info as info } from '../footer/footer_items.js'

export default {
  data () {
    return {
      valid: true,
      name: undefined,  // お名前
      kana: undefined,  // フリガナ
      phone: undefined,  // 電話番号
      email: undefined,  // メールアドレス
      category: undefined,  // カテゴリー
      date: new Date().toISOString().substr(0, 8) + ('0' + (new Date().getDate() + 1)).slice(0, 2),  // 利用日（宿泊・食事）
      days: undefined,  // 宿泊日数（宿泊）
      menu: false,
      room: undefined,  // 部屋タイプ（宿泊）
      adults: 0,  // 大人（宿泊）
      kids: 0,  // 子供（宿泊）
      toddlers: 0,  // 5歳以下（宿泊）
      breakfast: undefined,  // 朝食（宿泊）
      dinner: undefined,  // 夕食（宿泊）
      cource: undefined,  // コース（食事）
      heads: 0,  // 利用人数（食事）
      options: undefined,  // オプションメニュー（食事）
      budget: undefined,  // 予算（食事）
      others: undefined,  // その他お問合せ事項（宿泊・食事）
      details: undefined,

      rules: {
        kana: value => !!(value || '').match(/^[ア-ン　]+$/) || '全角カタカナで入力してください。',
        phone: value => !!(value || '').match(/^[0-9\-]+$/) || '半角数字で入力してください。',
        email: value => !!(value || '').match(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/) || 'メールアドレス形式で入力してください。',
        budget: value => !!((value || '').match(/^[0-9]+$/) && (value || '')>=3000) || '¥3,000円以上の半角数字で入力してください。',
        required: value => !!(value || '') || '必須項目です。'
      },

      input: true, // 入力画面
      confirm: false, // 確認画面
      sending: false, // 送信中画面
      succeeded: false, // 送信完了画面
      failed: false, // 送信失敗画面

      info
    }
  },
  methods: {
    // 焼き肉＆BBQのご予約について選択時の人数　内容変更時にチェック
    rules_heads() {
      if (this.category !== 'ご宿泊について') return true
      this.heads = this.adults + this.kids + this.toddlers
      return this.heads > 0 ? true : false
    },
    // 確認画面へボタン
    validate() {
      if(this.$refs.form.validate()){
        this.confirm = true
        this.input = false
      }
    },
    // ご利用日選択を翌日以降可能に
    allowed_date: value => parseInt(value.replace(/-/g, ''), 10) > parseInt(new Date().toISOString().substr(0, 10).replace(/-/g, '')),
    // 戻るボタン
    back() {
      this.confirm = false
      this.input = true
    },
    // メール送信
    sendMail(e) {
      this.confirm = false
      this.sending = true
      const _this = this
      const params = new URLSearchParams()
      if (this.category === 'ご宿泊について'){
        this.details =
          'ご利用日：' + this.date.replace('-', ' 年 ').replace('-', ' 月 ') + ' 日' +
          '\n宿泊日数：' + this.days + ' 日間' +
          '\n部屋タイプ：' + this.room +
          '\n人数：' + this.heads + ' 名 ( 大人 ' + this.adults + ' 名 / 子供 ' + this.kids + ' 名 / 5歳以下 ' + this.toddlers + ' 名 )' +
          '\n朝食：' + this.breakfast +
          '\n夕食：' + this.dinner +
          (this.others ? '\n\nその他：\n' + this.others : '')
      }else if (this.category === '焼き肉＆BBQのご予約について') {
        this.details =
          'ご利用日：' + this.date.replace('-', ' 年 ').replace('-', ' 月 ') + ' 日' +
          // '\nコース：' + this.cource +
          '\n人数：' + this.heads + ' 名' +
          // (this.options === undefined ? '' : '\nオプション：\n' + this.options.join('\n')) +
          '\nご予算：' + this.budget + ' 円 ／ 人' +
          (this.others ? '\n\nその他：\n' + this.others : '')
      }else{
        this.details = this.others
      }

      params.append('name', this.name)
      params.append('kana', this.kana)
      params.append('phone', this.phone)
      params.append('email', this.email)
      params.append('category', this.category)
      params.append('details', this.details)

      e.target.disabled = true

      // メール送信時 crosのエラー回避のため[window.location.origin]を追記
      axios
      .post(window.location.origin + '/mail_send.php', params) // 本番用
      // .post('http://localhost/le_passage/src/static/mail_send.php', params) // ローカル用
      .then((response) => {
        console.log(response);
        if (response.data.code === '200') {
          _this.sendStatus = 1
          this.sending = false
          this.succeeded = true
          setTimeout(() => {
          }, 3000)
        } else {
          _this.sendStatus = -1
          setTimeout(() => {
            this.sending = false
            this.failed = true
          }, 10000)
        }
      })
      .catch((error) => {
        console.log('response error', error)
      })
    }
  }
}
</script>