require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuex from 'vuex'
import { routes } from './router'
import MainApp from './components/MainApp'
import StoreData from './store'

Vue.use(VueRouter)
Vue.use(Vuex)

export const store = new Vuex.Store(StoreData)

export const router = new VueRouter({
    routes,
    mode: 'history'
})

/*router.beforeEach((to, from, next) => {
  
})
*/


const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
        MainApp
    }
});
