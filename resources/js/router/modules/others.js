import Login from './../../components/auth/Login'
import ViewDetails from './../../pages/nicolasRomero/ViewDetails'

export default [
  {
    path: '/login',
    component: Login,
    name: 'Login'
  },
  {
    path: '/ver/:uuid/:type',
    component: ViewDetails,
  },
  {
    path :'*',
    component: Login
    // Redirigir a pantalla con mensaje de 'bienvenido a sistemas no se queeeeee'
  },
]