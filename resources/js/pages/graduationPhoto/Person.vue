<template>
  <div>
    <h1>persona</h1>
    <form id="form-person" @submit="_storePerson">
      <input-base v-model="person.name" label="Nombe (s)" id="name" required />
      <input-base v-model="person.first_surname" label="Apellido paterno" id="first_surname" required />
      <input-base v-model="person.second_surname" label="Apellido materno" id="second_surname" required />
      <input-base v-model="person.phone" label="Teléfono" id="phone" type="phone" required />
      <input-base v-model="person.email" label="Correo electrónico" id="email" type="email" required />
      <h1>Confirma tu identidad</h1>
      <h2>Tómate una selfie o sube alguna identificación oficial para verificar tu identidad.</h2>
      <img class="face-photo" v-show="facePhotoUrl" :src="facePhotoUrl" alt="Foto de rostro de la persona">
      <input-file id="face_photo_path" v-model="person.face_photo_path" required />
      <button-base :loading="loading" :disabled="disabled" type="submit" />
    </form>
  </div>
</template>

<script>
import InputBase from './../../components/Inputs/InputBase';
import InputFile from './../../components/Inputs/InputFile';
import ButtonBase from './../../components/Buttons/ButtonBase';
import { storePerson, getUrlPhoto } from './../../services/graduationPhoto';

export default {
  components: {
    InputBase,
    InputFile,
    ButtonBase,
  },
  data: () => ({
    disabled: false,
    loading: false,
    person: {
      name: '',
      first_surname: '',
      second_surname: '',
      phone: '',
      email: '',
      face_photo_path: '',
    },
    facePhotoUrl: '',
  }),
  computed: {
    isGuest() {
      return this.$route.name === 'graduation-photo-guest';
    },
  },
  watch: {
    'person.face_photo_path'(newUrl, oldUrl) {
      if (newUrl !== '') {
        this._getFacePhotoUrl();
      }
    },
  },
  methods: {
    async _storePerson(e) {
      e.preventDefault();
      console.log(this.person);
      this.loading = true;
      const { data } = await storePerson(this.person);
      this.loading = false;
      if (this.isGuest) {
        this.$router.push({
          name: 'graduation-photo-guest-address',
          params: {
            invitado: data.id,
            evento: this.$route.params.evento,
            anfitrion: this.$route.params.anfitrion,
          }
        });
      } else {
        this.$router.push({
          name: 'graduation-photo-host-address',
          params: {
            anfitrion: data.id,
          }
        });
      }
    },
    async _getFacePhotoUrl() {
      const { data } = await getUrlPhoto(this.person.face_photo_path);
      this.facePhotoUrl = data.url;
    },
  },
};
</script>

<style scoped>

.face-photo {
  width: 100%;
  max-width: 100px;
  height: auto;
}

</style>
