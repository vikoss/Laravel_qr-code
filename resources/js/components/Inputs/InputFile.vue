<template>
  <label :for="id">
    <input :required="required" type="file" :name="id" :id="id" :accept="accept" @change="onChange">
    <loading-circle :show="loading" class="mr-3" />
    <img v-show="!loading" class="mr-3" src="./../../assets/svg/camera.svg" alt="Icono de camara">
    {{ label }}
  </label>
</template>

<script>
import { uploadPhoto } from './../../services/graduationPhoto';
import LoadingCircle from './../Loadings/Circle.vue';

export default {
  name: 'InputBase',
  components: { LoadingCircle },
  props: {
    value: {
      type: String,
      default: '',
    },
    id: {
      type: String,
      default: '',
    },
    label: {
      type: String,
      default: 'Tomar selfie o subir documento',
    },
    accept: {
      type: String,
      default: 'image/*'
    },
    required: {
      type: Boolean,
      default: false,
    },
  },
  model: { prop: 'value', event: 'update' },
  data: () => ({
    loading: false,
    path: '',
  }),
  methods: {
    async onChange({ target }) {
      this.loading = true;
      const photo = target.files[0];
      const { data } = await uploadPhoto(photo);
      this.path = data.path;
      this.loading = false;
      this.$emit('update', this.path);
    },
  },
};
</script>

<style scoped>

input {
  display: none;
}

label {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 40px;
  cursor: pointer;
  background-color: aqua;
  color: white;
  border-radius: 6px;
}

img {
  height: 24px;
  width: 24px;
}

.mr-3 {
  margin-right: 14px;
}

</style>
