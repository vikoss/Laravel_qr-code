import authenticate from './../../services/oauth'
import getLocalUser from './../../helpers/getLocalUser'

export default {
  namespaced: true,
  state: {
    user: getLocalUser,
    isLoggedIn: !!getLocalUser,
    loading: false,
    error: null,
  },
  mutations: {
    SET_ERROR(state, error) {
      state.error = error
    },
    SET_LOADING(state, loading) {
      state.loading = loading
    },
    SET_USER(state, user) {
      state.user = user
    },
    SET_IS_LOGGED_IN(state, isLoggedIn) {
      state.isLoggedIn = isLoggedIn
    }
  },
  getters: {
    error(state) {
      return state.error
    },
    loading(state) {
      return state.loading
    },
    token(state) {
      return state.user.access_token
    }
  },
  actions: {
    async login({ commit, dispatch }, credentials) {
      commit('SET_LOADING', true)
      commit('SET_ERROR', null)
      try {
        const { data } = await authenticate(credentials)
        commit('SET_USER', data)
        commit('SET_IS_LOGGED_IN', true)
        localStorage.setItem('user-qr-codes', JSON.stringify(data))
        dispatch('redirect/basedOnRole', data.role, { root: true })
      } catch (error) {
        console.log(error)
        commit('SET_ERROR', true)
      }
      commit('SET_LOADING', false)
    }
  },
}