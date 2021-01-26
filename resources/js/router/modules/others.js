import Login from './../../components/auth/Login'
import ViewDetails from './../../pages/nicolasRomero/ViewDetails'

export default [
  {
    path: '/login',
    component: Login,
    name: 'Login'
  },
  // This route belongs to module Nicolas Romero but when at the beginning qr was generated with this path
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