<template>
  <select :name="id" :id="id">
    <option selected disabled>Selecciona una opción</option>
    <option v-for="option in options" :key="option.id" :value="option.id">
      {{ option.name }}
    </option>
  </select>
</template>

<script>
export default {
  name: 'SelectBase',
  props: {
    options: {
      type: Array,
      default: () => ([]),
    },
    id: {
      type: String,
      default: '',
    },
  },
};
</script>

<style>

</style>