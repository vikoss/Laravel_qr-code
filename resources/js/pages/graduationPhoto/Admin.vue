<template>
  <div>
    <input-base v-model="event.name" label="Nombre del evento" id="name" />
    <h1>Fecha y hora</h1>
    <input-date id="date" />
    <p>(12:30 PM)</p>
    <input-time id="time" />
    <button-base :loading="loading" :disabled="disabled" @click="_attachEvent" />
  </div>
</template>

<script>
import InputDate from './../../components/Inputs/InputDate';
import InputTime from './../../components/Inputs/InputTime';
import ButtonBase from './../../components/Buttons/ButtonBase';

export default {
  components: {
    InputDate,
    InputTime,
    ButtonBase,
  },
  data: () => ({
    event: {
      name: '',
      date_time: '',
    },
    loading: false,
    disabled: false,
  }),
};
</script>

<style>

</style>