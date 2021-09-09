<template>
  <div>
    <input type="date" :name="id" :id="id" :min="minDate" />
    {{ minDate }}
  </div>
</template>

<script>
import { formatDate } from './../../helpers/formatDateTime';

export default {
  name: 'InputDate',
  props: {
    id: {
      type: String,
      default: '',
    },
  },
  computed: {
    minDate() {
      return formatDate(new Date());
    },
  },
};
</script>

<style>

</style>