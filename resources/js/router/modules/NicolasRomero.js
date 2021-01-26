import IndexNicolasRomero from './../../pages/nicolasRomero/Index'
import ListOfCodes from './../../pages/nicolasRomero/ListOfCodes'
import ImportExcel from './../../pages/nicolasRomero/ImportExcel'

export default [
  {
    path: '/nicolas_romero',
    component: IndexNicolasRomero,
    name: 'NicolasRomero',
    meta: {
        requiresAuth: true,
        nicolasRomeroAuth: true,
        fuelStationAuth: false
    },
    children: [
        {
            path: '/',
            component: ListOfCodes,
        },
        {
            path: 'importar_excel',
            component: ImportExcel,
        },
    ]
  },
]

