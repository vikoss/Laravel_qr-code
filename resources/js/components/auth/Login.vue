<template>
    <div class="login row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    login
                </div>
                <div class="card-body">
                    <form @submit.prevent="authenticate">
                        <div class="form-group row">
                            <label for="email">Correo:</label>
                            <input type="email" name="email" id="email" placeholder="Escribe tu correo" v-model="form.email">
                        </div>
                        <div class="form-group row">
                            <label for="password">Contrasena:</label>
                            <input type="password" name="password" id="password" placeholder="Escribe tu contrasena" v-model="form.password">
                        </div>
                        <div class="form-group row">
                            <input type="submit" value="Entrar">
                        </div>
                        <div class="form-group row" v-if="authError">
                            <p class="error">
                                {{ authError }}
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { login } from './../../services/auth'
import { mapGetters } from 'vuex'

export default {
    name: 'login',
    data() {
        return {
            form: {
                email: '',
                password: ''
            },
            error: null
        }
    },
    methods: {
        authenticate() {
            this.$store.dispatch('login')

            login(this.form)
                .then(response => {
                    this.$store.commit('loginSuccess', response)
                    console.log(response.role)
                    if (response.role == 'FuelStation-Office') {
                        this.$router.push('gasolinera/generar')
                    } else if (response.role == 'FuelStation-Operations') {
                        this.$router.push('gasolinera')
                    } else if (response.role == 'NicolasRomero') {
                        this.$router.push('nicolas_romero')
                    }
                })
                .catch(error => {
                    this.$store.commit('loginFailed', {error})
                })
        }
    },
    computed: {
        ...mapGetters(['authError'])
    },
    mounted() {
        //console.log(this.$store.state)
    }

}
</script>

<style>

</style>