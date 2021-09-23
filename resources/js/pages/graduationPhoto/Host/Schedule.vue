<template>
  <div>
    <h1>Selecciona el evento al que te quieres sucribir participar</h1>
    <select-base v-model="host.event_id" :options="events" id="event" />
    <button-base :loading="loading" :disabled="disabled" @click="_storeHost" />
  </div>
</template>

<script>
import ButtonBase from './../../../components/Buttons/ButtonBase';
import SelectBase from './../../../components/Selects/SelectBase';
import { listEvents, storeHost } from './../../../services/graduationPhoto';

export default {
  components: {
    ButtonBase,
    SelectBase,
  },
  data() {
    return {
      host: {
        event_id: '',
        person_id: this.$route.params.anfitrion,
      },
      loading: false,
      disabled: false,
      events: [],
    }
  },
  async beforeCreate() {
    const { data: events } = await listEvents();
    this.events = events;
  },
  methods: {
    async _storeHost() {
      this.loading = true;
      await storeHost(this.host);
      this.loading = false;
      this.$router.push({
        name: 'graduation-photo-host-entry',
        params: { anfitrion: this.$route.params.anfitrion, evento: this.host.event_id },
      });
    },
  },
};
</script>

<style>

</style>