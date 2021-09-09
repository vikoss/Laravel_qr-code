export default [
  {
    path: '/foto-de-graduacion',
    component: require(/* webpackChunkName: "graduation-photo" */ './../../pages/graduationPhoto/Index.vue'),
    name: 'graduation-photo',
  },
  // Anfitrion -> registro (persona), registro (direccion) de persona, registro (fecha de evento).
  {
    path: '/foto-de-graduacion/anfitrion',
    component: import(/* webpackChunkName: "graduation-photo-host" */ './../../pages/graduationPhoto/Person.vue'),
    name: 'graduation-photo-host',
  },
  {
    path: '/foto-de-graduacion/anfitrion/:anfitrion/direccion',
    component: import(/* webpackChunkName: "graduation-photo-host-address" */ './../../pages/graduationPhoto/Address.vue'),
    name: 'graduation-photo-host-address',
  },
  {
    path: '/foto-de-graduacion/anfitrion/:anfitrion/agendar',
    component: import(/* webpackChunkName: "graduation-photo-schedule" */ './../../pages/graduationPhoto/Host/Schedule.vue'),
    name: 'graduation-photo-schedule',
  },
  // Invitado -> registro (persona), registro (direccion) de persona, registro (relacion).
  {
    path: '/foto-de-graduacion/invitacion/evento/:evento',
    component: import(/* webpackChunkName: "graduation-photo-guest" */ './../../pages/graduationPhoto/Person.vue'),
    name: 'graduation-photo-guest',
  },
  {
    path: '/foto-de-graduacion/invitacion/invitado/:invitado/direccion/evento/:evento',
    component: import(/* webpackChunkName: "graduation-photo-guest-address" */ './../../pages/graduationPhoto/Address.vue'),
    name: 'graduation-photo-guest-address',
  },
  {
    path: '/foto-de-graduacion/invitacion/:invitacion/relacion',
    component: import(/* webpackChunkName: "graduation-photo-relationship" */ './../../pages/graduationPhoto/Guest/Relationship.vue'),
    name: 'graduation-photo-relationship',
  },
];
