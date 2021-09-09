<template>
  <div>
    <h1>relacion</h1>
    <select-base id="relationship_type_id" :options="[{ id: 1, name: 'hermano' }]" />
  </div>
</template>

<script>
import SelectBase from './../../../components/Selects/SelectBase';

export default {
  components: {
    SelectBase,
  },
};
</script>

<style>

</style>