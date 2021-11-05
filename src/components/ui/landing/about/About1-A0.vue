<template>
  <v-sheet class="background py-6 py-md-16">
    <v-container>
      <div class="text-center">
        <img src="images\logo-vertical.svg" alt="" height="250px">
      </div>
      <v-responsive max-width="900px" class="mt-6 mx-auto">
        <div class="text-h4 font-weight-black">OPEN</div>
        <v-divider class="mt-1 mb-6 blue-grey darken-1" />
        <div class="text-center">
          <div class="d-sm-flex justify-center align-center">
            <div class="text-subtitle-1 font-weight-bold">LUNCH</div>
            <div class="text-h4 font-weight-regular ml-sm-2">11:30 ~ 14:30</div>
            <div class="text-subtitle-1 font-weight-regular"> （ L.O. 14:00 ）</div>
          </div>
          <div class="d-sm-flex justify-center align-center mt-2 mt-sm-1">
            <div class="text-subtitle-1 font-weight-bold">DINNER</div>
            <div class="text-h4 font-weight-regular ml-sm-2">17:30 ~ 23:00</div>
            <div class="text-subtitle-1 font-weight-regular"> （ L.O. 22:30 ）</div>
          </div>
          <div class="text-body-2 font-weight-bold mt-3">定休　／　毎週水曜日</div>
        </div>
        <div class="text-h4 font-weight-black mt-6">FACILITY</div>
        <v-divider class="mt-1 blue-grey darken-1" />
        <div class="d-flex justify-center mt-6">
          <div class="text-h5 font-weight-regular text-center mx-6">Free Wi-Fi</div>
          <div class="text-h5 font-weight-regular text-center mx-6">喫煙所完備</div>
        </div>
        <div class="text-h4 font-weight-black mt-6">CONTACT</div>
        <v-divider class="mt-1 blue-grey darken-1" />
        <div class="text-center mt-6">
          <div class="text-h5 font-weight-bold senary--text">Tel.</div>
          <div class="text-h4 font-weight-regular">0857-51-0066</div>
          <div class="text-body-2 font-weight-bold">受付時間　11:00 ~ 22:00</div>
          <div class="text-h5 font-weight-bold mt-6 senary--text">Email</div>
          <div class="text-h4 font-weight-regular">web9@magic-plus.net</div>
          <div class="text-h5 font-weight-bold mt-6 senary--text">Web</div>
          <v-btn to="/#contact" width="200px" class="d-flex mt-1 mx-auto" large outlined tile>
            お問い合わせ
          </v-btn>
        </div>
        <div class="text-h4 font-weight-black mt-6">SNS</div>
        <v-divider class="mt-1 blue-grey darken-1" />
        <div class="d-flex justify-center text-center mt-6">
          <a
            style="text-decoration: none"
            href="https://www.instagram.com/"
            target="_blank"
            rel="noopener noreferrer"
            class="text-body-1 mx-3"
          >
            <v-icon x-large>mdi-instagram</v-icon>
            instagram
          </a>
          <a
            style="text-decoration: none"
            href="https://www.facebook.com/"
            target="_blank"
            rel="noopener noreferrer"
            class="text-body-1 mx-3"
          >
            <v-icon x-large>mdi-facebook</v-icon>
            Facebook
          </a>
          <a
            style="text-decoration: none"
            href="https://www.twitter.com/"
            target="_blank"
            rel="noopener noreferrer"
            class="text-body-1 mx-3"
          >
            <v-icon x-large>mdi-twitter</v-icon>
            Twitter
          </a>
        </div>
        <div class="text-h4 font-weight-black mt-6">MAP</div>
        <v-divider class="mt-1 blue-grey darken-1" />
        <div class="text-center">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12995.607346526911!2d134.2188154!3d35.4819725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc44e075ea0125845!2z5qCq5byP5Lya56S-TWFnaWNQbHVz!5e0!3m2!1sja!2sjp!4v1622074822901!5m2!1sja!2sjp"
            height="450"
            style="border:0;"
            loading="lazy"
            class="w-full mt-6"
          />
        </div>
      </v-responsive>
    </v-container>
  </v-sheet>
</template>
