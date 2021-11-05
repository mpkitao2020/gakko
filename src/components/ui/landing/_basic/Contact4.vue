<template>
  <v-sheet>
    <v-container class="py-8">
      <v-responsive max-width="900" class="mx-auto">
        <div class="text-center">
          <h3 class="text-h3">お問い合わせフォーム</h3>
          <div class="text-h6 text-lg-h5 mt-3">
            ご相談やお問い合わせ、お見積りはこちらからご連絡下さい。
            <br />担当者からメール、またはお電話にてご連絡をさせていただきます。
            <br />可能な限り早急にご連絡させていただきますが、弊社都合によりご連絡が遅くなる場合がございますので、予めご了承下さい。
          </div>
        </div>

        <v-divider class="my-3"></v-divider>

        <div class="font-weight-bold text-body-1">
          <div class="d-flex align-center mt-3">
            <v-icon>mdi-map-marker-outline</v-icon>
            <span class="ml-1">
              鳥取県鳥取市吉成南町1-24-2 2F
            </span>
          </div>
          <div class="d-flex align-center mt-3">
            <v-icon>mdi-phone-outline</v-icon>
            <span class="ml-1">
              <a href="#" class="text-decoration-none">
                0857-51-0066
              </a>
            </span>
          </div>
          <div class="d-flex align-center mt-3">
            <v-icon>mdi-email-outline</v-icon>
            <span class="ml-1">
              <a href="#" class="text-decoration-none">y.kojima@magic-plus.net</a>
            </span>
          </div>
        </div>

        <v-divider class="my-3"></v-divider>

        <v-form class="mt-2">
          <v-text-field label="Name" outlined></v-text-field>
          <v-text-field label="Email" outlined></v-text-field>
          <v-text-field label="Phone" outlined></v-text-field>
          <v-textarea label="Message" outlined></v-textarea>
          <v-btn submit x-large color="secondary" min-width="180">送信</v-btn>
        </v-form>
      </v-responsive>
    </v-container>
  </v-sheet>
</template>

<style lang="sass" scoped>
.v-btn
  display: block
  margin: 0 auto
</style>
