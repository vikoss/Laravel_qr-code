import IndexFuelStationOffice from './../../pages/fuelStation/IndexOffice'
import GenerateBitacora from './../../pages/fuelStation/GenerateBitacora'
import GenerateReport from './../../pages/fuelStation/GenerateReport'

import IndexFuelStationOperation from './../../pages/fuelStation/IndexOperation'
import Refill from './../../pages/fuelStation/Refill'
import ScanQRCode from './../../pages/fuelStation/ScanQRCode'

export default [
  {
    path: '/gasolinera',
    component: IndexFuelStationOperation,
    name: 'FuelStation',
    meta: {
      requiresAuth: true,
      fuelStationAuth: true
    },
    children: [
      {
          path: '/',
          component: ScanQRCode,
          name: 'ScanQRCode'
      },
      {
          path: 'recarga',
          component: Refill,
          name: 'Refill'
      },
    ]
},
  {
    path: '/gasolinera/generar',
    component: IndexFuelStationOffice,
    name: 'IndexFuelStationOffice',
    children: [
      {
          path: 'reporte',
          component: GenerateReport,
          name: 'GenerateReport'
      },
      {
          path: 'bitacora',
          component: GenerateBitacora,
          name: 'GenerateBitacora'
      },
    ]
  },
]