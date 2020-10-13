require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuex from 'vuex'
import { routes } from './routes'
import MainApp from './components/MainApp'
/*import QRCodeAtizapan from './store/QRCodeAtizapan/store'
import FuelStation from './store/fuelStation/store'*/
import StoreData from './store/store'

Vue.use(VueRouter)
Vue.use(Vuex)

/*
    Aprender namespaces y modulos para agregarlos 
*/

const store = new Vuex.Store(StoreData)

const router = new VueRouter({
    routes,
    mode: 'history'
})

router.beforeEach((to, from, next) => {
    const requiresAuth = to.matched.some(record => record.meta.requiresAuth)
    const currentUser = store.state.currentUser

    /*if(requiresAuth && !currentUser) {
        next('/login');
    } else if(to.path == '/login' && currentUser) {
        next('/');
    } else {
        next();
    }*/
    
    
    /*if (to.path !== '/login' && !currentUser) next({ name: 'Login' })
    else next()*/

    /*if (to.meta.requiresAuth) {
        if (!currentUser || !currentUser.token) {
            next({name: 'Login'})
        } else if (to.meta.nicolasRomeroAuth) {
            if (currentUser.role == 'Nicolas-Romero') {
                next('/nicolas_romero')
            } else {
                next()
            }
            
        }
        
    } else if (to.meta.residentAuth){

    } else {
        
    }*/

    // No requiere autenticacion entonces paseeee
    if (!requiresAuth) {
        next()
        
    // Si requiere autenticacion
    } else {
        // el usuario ya esta logeado
        if (currentUser) {
            next()
            /*if (currentUser.role == 'FuelStation') {
                next('/nicolas_romero')
            } else if (currentUser.role == 'NicolasRomero') {
                next('/gasolinera')
            }*/
        // el usuario no esta logeado
        } else {
            next('/login')
        }
    }

    /*if(requiresAuth && !currentUser) {
        next('/login');
    } else if(to.path == '/login' && currentUser) {
        next('/');
    } else {
        next();
    }*/


})


const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
        MainApp
    }
});
