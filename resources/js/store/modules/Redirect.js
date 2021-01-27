import { router } from './../../app'

export default {
  namespaced: true,
  state: {},
  mutations: {
    to({}, payload) {
      router.push(payload)
    },
  },
  getters: {},
  actions: {
    basedOnRole({ commit }, role) {
      console.log(role, 'basedOnRole')
      if (!role) {
        commit('oauth/SET_ERROR', true, { root: true })
      }
      if (role === 'FuelStation-Office') {
        commit('to', { name: 'FuelStation-Office' })
      }
      if (role === 'FuelStation-Operations') {
        commit('to', { name: 'FuelStation-Operations-Scan' })
      }
      if (role === 'NicolasRomero') {
        commit('to', { name: 'NicolasRomero'})
      }
      if (role === 'Paysheet-Administrator') {
        commit('to', { name: 'paysheet-View', params: { rfc: 'rfcparam' } })
      }
    },
  },
}