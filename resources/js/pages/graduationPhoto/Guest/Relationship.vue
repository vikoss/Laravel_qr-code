<template>
  <div>
    <h1>Que relacion tienes con el anfitrion</h1>
    <select-base v-model="invite.relationship_id" id="relationship_id" :options="relationships" />
    <button-base :loading="loading" :disabled="disabled" @click="_storeInvite" />
  </div>
</template>

<script>
import SelectBase from './../../../components/Selects/SelectBase';
import ButtonBase from './../../../components/Buttons/ButtonBase';
import { listRelationships, storeInvite } from '../../../services/graduationPhoto';

export default {
  components: {
    SelectBase,
    ButtonBase,
  },
  data() {
    return {
      invite: {
        event_id: this.$route.params.evento,
        host_id: this.$route.params.anfitrion,
        guest_id: this.$route.params.invitado,
        relationship_id: '',
      },
      relationships: [],
      loading: false,
      disabled: false,
    }
  },
  async beforeCreate() {
    const { data: relationships } = await listRelationships();
    this.relationships = relationships;
  },
  methods: {
    async _storeInvite() {
      this.loading = true;
      await storeInvite(this.invite);
      this.loading = false;
      this.$router.push({
        name: 'graduation-photo-guest-entry',
        params: { invitado: this.$route.params.invitado },
      });
    },
  },
};
</script>

<style>

</style>