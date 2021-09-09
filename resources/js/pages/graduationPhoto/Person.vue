<template>
  <div>
    <h1>persona</h1>
    <input-base label="Nombe (s)" id="name" />
    <input-base label="Apellido paterno" id="first_surname" />
    <input-base label="Apellido materno" id="second_surname" />
    <input-base label="Teléfono" id="phone" />
    <input-base label="Correo electrónico" id="email" />
    <h1>Confirma tu identidad</h1>
    <h2>Selecciona el tipo de identificación oficial que estas por carga para verificar tu identidad.</h2>
    <input-file
      id="face_photo_url"
      label="Nombe (s)"
      placeholder="Escribe tu nombre (s)"
    />
  </div>
</template>

<script>
import InputBase from './../../components/Inputs/InputBase';
import InputFile from './../../components/Inputs/InputFile';

export default {
  components: {
    InputBase,
    InputFile,
  },
};
</script>

<style>

</style>