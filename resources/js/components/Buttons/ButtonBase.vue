<template>
  <button :type="type" :disabled="disabled" @click="$emit('click')">
    <loading-circle :show="loading" />
    <p v-show="!loading">{{ text }}</p>
  </button>
</template>

<script>
import LoadingCircle from './../Loadings/Circle.vue';

export default {
  components: { LoadingCircle },
  props: {
    text: {
      type: String,
      default: 'Enviar',
    },
    loading: {
      type: Boolean,
      default: false,
    },
    disabled: {
      type: Boolean,
      default: false,
    },
    type: {
      type: String,
      default: 'button'
    },
  },
};
</script>

<style scoped>

button {
  background-color: aqua;
  height: 40px;
  width: 100%;
  border-radius: 4px;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
}

p {
  margin: 0px;
}

</style>