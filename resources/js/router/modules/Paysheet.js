export default [
  {
    path: '/nomina/administrador',
    name: 'paysheet-Upload',
  },
  {
    path: '/nomina/:rfc',
    name: 'paysheet-View',
  },
].map(route => {
  const namePath = route.name.split('-')
  return {
    ...route,
    component: () => import(/* webpackChunkName: "ModulePaysheet" */ `./../../pages/${namePath[0]}/${namePath[1]}.vue`),
  }
})