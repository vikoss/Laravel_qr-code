<template>
  <div>
    <input type="file" name="file" id="file">
    <button v-on:click="uploadFile">Subir</button>
  </div>
</template>

<script>
import axios from "axios"
import { baseURL } from './../../services/baseURL'

export default {
  data() {
    return {
      file: null,
    }
  },
  methods: {
    uploadFile() {
      const mypostparameters= new FormData()
      mypostparameters.append('file', document.getElementById('file').files[0], document.getElementById('file').files[0].name);
      console.log(document.getElementById('file').files)
      axios.post(`${baseURL}/paysheet/upload`, mypostparameters)
        .then(response => response.data)
        .catch(error => console.error(error))
    }
  }

}
</script>

<style>

</style>