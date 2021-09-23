<template>
  <div>
    <h1>Hola</h1>
    <img src="" alt="Fotografía de alumnos con toga y birrete">
    <router-link to="/foto-de-graduacion/anfitrion">Registrate para asistir a tu evento</router-link>
  </div>
</template>

<script>
import InputBase from './../../components/Inputs/InputBase';
import InputFile from './../../components/Inputs/InputFile';
import InputDate from './../../components/Inputs/InputDate';
import InputTime from './../../components/Inputs/InputTime';
import SelectBase from './../../components/Selects/SelectBase';

export default {
  components: {
    InputBase,
    InputFile,
    InputDate,
    InputTime,
    SelectBase,
  },
};
</script>

<style>

</style>