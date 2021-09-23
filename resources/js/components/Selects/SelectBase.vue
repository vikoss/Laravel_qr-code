<template>
  <select :name="id" :id="id" @input="$emit('update', $event.target.value)">
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
    value: {
      type: String,
      default: '',
    },
    options: {
      type: Array,
      default: () => ([]),
    },
    id: {
      type: String,
      default: '',
    },
  },
  model: { prop: 'value', event: 'update' },
};
</script>

<style>

</style>