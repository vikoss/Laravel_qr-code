export default [
  {
    path: '/foto-de-graduacion',
    component: () => import(/* webpackChunkName: "graduation-photo" */ './../../pages/graduationPhoto/Index.vue'),
    name: 'graduation-photo',
  },
  // Anfitrion -> registro (persona), registro (direccion) de persona, registro (fecha de evento).
  {
    path: '/foto-de-graduacion/anfitrion',
    component: () => import(/* webpackChunkName: "graduation-photo-host" */ './../../pages/graduationPhoto/Person.vue'),
    name: 'graduation-photo-host',
  },
  {
    path: '/foto-de-graduacion/:anfitrion/direccion',
    component: () => import(/* webpackChunkName: "graduation-photo-host-address" */ './../../pages/graduationPhoto/Address.vue'),
    name: 'graduation-photo-host-address',
  },
  {
    path: '/foto-de-graduacion/:anfitrion/agendar',
    component: () => import(/* webpackChunkName: "graduation-photo-host-schedule" */ './../../pages/graduationPhoto/Host/Schedule.vue'),
    name: 'graduation-photo-host-schedule',
  },
  // Invitado -> registro (persona), registro (direccion) de persona, registro (relacion).
  {
    path: '/foto-de-graduacion/:evento/:anfitrion/invitacion',
    component: () => import(/* webpackChunkName: "graduation-photo-guest" */ './../../pages/graduationPhoto/Person.vue'),
    name: 'graduation-photo-guest',
  },
  {
    path: '/foto-de-graduacion/:invitado/direccion/:evento/:anfitrion/invitacion',
    component: () => import(/* webpackChunkName: "graduation-photo-guest-address" */ './../../pages/graduationPhoto/Address.vue'),
    name: 'graduation-photo-guest-address',
  },
  {
    path: '/foto-de-graduacion/:invitado/:evento/:anfitrion/relacion',
    component: () => import(/* webpackChunkName: "graduation-photo-relationship" */ './../../pages/graduationPhoto/Guest/Relationship.vue'),
    name: 'graduation-photo-guest-relationship',
  },
  // Accesos
  {
    path: '/foto-de-graduacion/anfitrion/:anfitrion/:evento/acceso',
    component: () => import(/* webpackChunkName: "graduation-photo-host-entry" */ './../../pages/graduationPhoto/Entry.vue'),
    name: 'graduation-photo-host-entry',
  },
  {
    path: '/foto-de-graduacion/invitado/:invitado/acceso',
    component: () => import(/* webpackChunkName: "graduation-photo-guest-entry" */ './../../pages/graduationPhoto/Entry.vue'),
    name: 'graduation-photo-guest-entry',
  },
];
