<template>
  <div>
    <h1>Listo {{ name }}</h1>
    <h2>Este es tu acceso no lo olvides el dia de tu evento.</h2>
    <img :src="`data:image/png;base64,${qrCode}`" alt="Codigo QR">
    <h2>Descarga tu acceso</h2>
    <a :href="`data:application/octet-stream;base64,${entry}`" :download="`Acceso-${name}.pdf`">Descargar mi acceso</a>

    <!-- UI only for Host-->
    <section v-if="!isGuest">
      <h1>Comparte el siguiente enlace para que puedan asistir tus invitado</h1>
      <input-base v-model="inviteUrl" id="invite-url" readonly @click="copyToClipboard" />
      <h1>o compartelo en redes sociales</h1>
      <share-network
        class="ancla-social-network"
        network="facebook"
        :url="inviteUrl"
        title="Say hi to Vite! A brand new, extremely fast development setup for Vue."
        description="This week, I’d like to introduce you to 'Vite', which means 'Fast'. It’s a brand new development setup created by Evan You."
        quote="Te invito a mi foto de graduacion."
        hashtags="UTFV"
        style="background-color: #1877f2;"
      >
        <img class="logo-social-network" src="./../../assets/images/social-network/outfill/facebook.png" alt="Logo de Facebook" style="background-color: #135fc2;">
        <span>Compartir en Facebook</span>
      </share-network>
      <share-network
        class="ancla-social-network"
        network="whatsapp"
        title="Hola te hago la invitacion a mi foto de graduacion."
        :url="inviteUrl"
        description="Descarga tu invitacion para poder ingresar."
        hashtags="UTFV"
        style="background-color: #25d366;"
      >
        <img class="logo-social-network" src="./../../assets/images/social-network/outfill/whatsapp.png" alt="Logo de Whatsapp" style="background-color: #1ea952;">
        <span>Compartir en Whatsapp</span>
      </share-network>
    </section>
    <!-- -------------- -->
  </div>
</template>

<script>
import { generateQRCode, generateEntry, getPerson, generateInviteURL } from './../../services/graduationPhoto';
import InputBase from './../../components/Inputs/InputBase';
import ButtonBase from './../../components/Buttons/ButtonBase';
import VueSocialSharing from 'vue-social-sharing';
import Vue from 'vue';
Vue.use(VueSocialSharing);

export default {
  components: { InputBase, ButtonBase, },
  data: () => ({
    qrCode: '',
    entry: '',
    name: '',
    inviteUrl: '',
  }),
  async beforeCreate() {
    //const personId = this.isGuest ? this.$route.params.anfitrion : this.$route.params.invitado;
    const { data: qrCode } = await generateQRCode({ text: this.personId });
    this.qrCode = qrCode;
    const { data: entry } = await generateEntry(this.personId);
    this.entry = entry;
    const { data: person } = await getPerson(this.personId);
    this.name = person.name;
    if (!this.isGuest) {
      const { data: invite } = await generateInviteURL({ person: this.$route.params.anfitrion, event: this.$route.params.evento });
      this.inviteUrl = invite.url;
      document.getElementById('invite-url').addEventListener('click', ({ target }) => {
        target.select();
        document.execCommand('copy');
      });
    }

  },
  computed: {
    isGuest() {
      return this.$route.name === 'graduation-photo-guest-entry';
    },
    personId() {
      return this.$route.params.anfitrion ? this.$route.params.anfitrion : this.$route.params.invitado;
    },
  },
  methods: {
    async test() {
      console.log('hello');
    },
    copyToClipboard() {
      document.getElementById('invite-url').select();
      document.execCommand('copy');
    },
  },
};
</script>

<style>

.ancla-social-network {
  width: 215px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  color: white;
  border-radius: 5px;
}

.logo-social-network {
  width: 100%;
  max-width: 44px;
  padding: 5px;
  margin-right: 10px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

</style>