<template>
  <div>
    <h1>Listo {{ name }}</h1>
    <h2>Este es tu acceso no lo olvides el dia de tu evento.</h2>
    <img :src="`data:image/png;base64,${qrCode}`" alt="Codigo QR">
    <h2>Descarga tu acceso</h2>
    <a :href="`data:application/octet-stream;base64,${entry}`" :download="`Acceso-${name}.pdf`">Descargar mi acceso</a>

    <!-- UI only for Host-->
    <section v-if="!isGuest">
      <input-base v-model="inviteUrl" id="invite-url" readonly @click="copyToClipboard" />
    </section>
    <!-- -------------- -->
  </div>
</template>

<script>
import { generateQRCode, generateEntry, getPerson, generateInviteURL } from './../../services/graduationPhoto';
import InputBase from './../../components/Inputs/InputBase';
import ButtonBase from './../../components/Buttons/ButtonBase';

export default {
  components: { InputBase, ButtonBase },
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

</style>