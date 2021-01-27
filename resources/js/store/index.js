import redirect from './modules/Redirect'
import fuelStation from './modules/FuelStation'
import oauth from './modules/Oauth'
import paysheet from './modules/Paysheet'
import nicolasRomero from './modules/NicolasRomero'

export default {
  modules: {
    redirect,
    fuelStation,
    oauth,
    paysheet,
    nicolasRomero,
  },
    state: {
        vehicleUUID: ''
    },
    getters: {
        /*---------------------   Store Fuel Station    ----------------------------*/
        getVehicleUUID(state) {
            return state.vehicleUUID
        }
    },
    mutations: {
        /*---------------------   Store Fuel Station    ----------------------------*/
        setVehicleUUID(state, uuid) {
            state.vehicleUUID = uuid
        }
    },
}