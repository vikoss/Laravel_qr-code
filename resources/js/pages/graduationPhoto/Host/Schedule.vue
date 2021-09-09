<template>
  <div>
    <h1>Fecha y hora</h1>
    <input-date id="date" />
    <input-time id="time" />
  </div>
</template>

<script>
import InputDate from './../../../components/Inputs/InputDate';
import InputTime from './../../../components/Inputs/InputTime';
export default {
  components: {
    InputDate,
    InputTime,
  },
};
</script>

<style>

</style>