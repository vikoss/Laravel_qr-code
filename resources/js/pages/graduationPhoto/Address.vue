<template>
  <div>
    <h1>direccion</h1>
    <input-base label="Código postal" id="cp" />
    <input-base label="Ciudad" id="city" placeholder="Ciudad" disabled />
    <input-base label="Alcaldia o municipio" id="town" disabled />
    <input-base label="Colonia" id="colony" />
      <!--input type="text" name="state_code" id="state_code"-->
    <input-base label="Calle y número" id="street" />
  </div>
</template>

<script>
import InputBase from './../../components/Inputs/InputBase';
import SelectBase from './../../components/Selects/SelectBase';

export default {
  components: {
    InputBase,
    SelectBase,
  },
};
</script>

<style>

</style>