<template>

<div class="login row justify-content-center">
  <div class="col-md-4">
    <!--h1 class="display-5">Bienvenid@</h1>
    <img :src="require('./../../assets/images/favicon.png')" alt="Codigo QR" width="100px"-->
    <form @submit.prevent="login(form)">
      <div class="form-group row">
        <label class="form-label" for="email">Correo:</label>
        <input type="email" name="email" id="email" placeholder="Escribe tu correo" v-model="form.email" class="form-control form-control-lg">
      </div>
      <div class="form-group row">
        <label class="form-label" for="password">Contrasena:</label>
        <input type="password" name="password" id="password" placeholder="Escribe tu contrasena" v-model="form.password" class="form-control form-control-lg">
      </div>
      <div class="form-group row">
        <input type="submit" value="Ingresar" class="btn btn-outline-primary btn-lg">
      </div>
      <div class="form-group row" v-if="error">
        <p class="error">
          Usuario o contrasena incorrecta.
        </p>
      </div>
    </form>
  </div>
</div>

</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
  name: 'login',
  data() {
    return {
      form: {
        email: '',
        password: '',
      },
    }
  },
  methods: {
    ...mapActions('oauth', ['login']),
  },
  computed: {
    ...mapGetters('oauth', ['error', 'loading'])
  },
}
</script>

<style>

</style>