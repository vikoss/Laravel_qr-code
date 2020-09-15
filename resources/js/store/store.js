import { getLocalUser } from './../helpers/getLocalUser'

const user = getLocalUser()

export default {
    state: {
        currentUser: user,
        isLoggedIn: !!user,
        loading: false,
        authError: null,
        customers: [],
        /*---------------------   Store QR Code Atizapan  ---------------------*/
        messageQRCode: 'code',
        /*---------------------   Store Fuel Station    ----------------------------*/
        messageAtizapan: 'Hello from fuel S'
    },
    getters: {
        isLoading(state) {
            return state.loading
        },
        isLoggedIn(state) {
            return state.isLoggedIn
        },
        currentUser(state) {
            return state.currentUser
        },
        authError(state) {
            return state.authError
        },
        customers(state) {
            return state.customers
        }
    },
    mutations: {
        login(state) {
            state.loading = true
            state.authError = null
        },
        loginSuccess(state, payload) {
            state.loading = false
            state.authError = null
            state.isLoggedIn = true
            state.currentUser = Object.assign({}, payload.user, {token: payload.access_token})

            localStorage.setItem('user', JSON.stringify(state.currentUser))
        },
        loginFailed(state, payload) {
            state.loading = false
            state.authError = payload.error
        },
        logout(state) {
            localStorage.removeItem('user')
            state.isLoggedIn = false
            state.currentUser = null
        }
    },
    actions: {
        login(context) {
            context.commit('login')
        }
    }
}