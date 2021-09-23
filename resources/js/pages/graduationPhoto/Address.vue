<template>
  <div>
    <h1>direccion</h1>
    <input-base v-model="cp" label="Código postal" id="cp" />
    <input-base v-model="address.city" label="Ciudad" id="city" placeholder="Ciudad" disabled />
    <input-base v-model="address.town" label="Alcaldia o municipio" id="town" disabled />
    <select-base v-model="address.colony" :options="colonies" id="colony" />
    <input-base v-model="address.street" label="Calle y número" id="street" />
    <button-base :loading="loading" :disabled="disabled" @click="_storeAddress" />
  </div>
</template>

<script>
import InputBase from './../../components/Inputs/InputBase';
import SelectBase from './../../components/Selects/SelectBase';
import ButtonBase from './../../components/Buttons/ButtonBase';
import { storeAddress, zipCode } from './../../services/graduationPhoto';

export default {
  components: {
    InputBase,
    SelectBase,
    ButtonBase,
  },
  data: () => ({
    address: {
      street: '',
      colony: '',
      city: '',
      state_code: '',
      town: '',
      cp: '',
    },
    cp: '',
    colonies: [],
    loading: false,
    disabled: false,
  }),
  computed: {
    isGuest() {
      return this.$route.name === 'graduation-photo-guest-address';
    },
    personId() {
      return this.$route.params.invitado ? this.$route.params.invitado : this.$route.params.anfitrion;
    },
  },
  watch: {
    cp(newCP, oldCP) {
      console.log('watch', newCP, oldCP);
      if (newCP.length > 4) {
        this.searchZipCode(newCP);
      }
    },
  },
  methods: {
    async searchZipCode(cp) {
      const { data } = await zipCode(cp);
      // fixxxxxxxx value => name
      this.address.cp = cp;
      this.address.colony = data.settlements[0].name;
      this.address.city = data.locality;
      this.address.state_code = data.federal_entity.code;
      this.address.town = data.municipality.name;
      this.colonies = data.settlements.map(colony => ({ id: colony.key, name: colony.name }));
    },
    async _storeAddress() {
      console.log(this.address);
      this.loading = true;
      await storeAddress({ personId: this.personId, address: this.address });
      this.loading = false;
      if (this.isGuest) {
        this.$router.push({
          name: 'graduation-photo-guest-relationship',
          params: {
            invitado: this.$route.params.invitado,
            evento: this.$route.params.evento,
            anfitrion: this.$route.params.anfitrion,
          }
        });
      } else {
        this.$router.push({
          name: 'graduation-photo-host-schedule',
          params: {
            anfitrion: this.$route.params.anfitrion,
          }
        });
      }
    },
  },
};
</script>

<style>

</style>