import Login from './components/auth/Login'

import IndexNicolasRomero from './pages/nicolasRomero/Index'
import ListOfCodes from './pages/nicolasRomero/ListOfCodes'
import ImportExcel from './pages/nicolasRomero/ImportExcel'
import ViewDetails from './pages/nicolasRomero/ViewDetails'

import IndexFuelStation from './pages/fuelStation/Index'
import Refill from './pages/fuelStation/Refill'
import ScanQRCode from './pages/fuelStation/ScanQRCode'
import GenerateReport from './pages/fuelStation/GenerateReport'

export const routes = [
    
    {
        path: '/login',
        component: Login,
        name: 'Login'
    },
    {
        path: '/nicolas_romero',
        component: IndexNicolasRomero,
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
            {
                path: 'ver_vigencia/:uuid/:type',
                component: ViewDetails,
            },
        ]
    },
    {
        path: '/gasolinera',
        component: IndexFuelStation,
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
            {
                path: 'generar_reportes',
                component: GenerateReport,
                name: 'GenerateReport'
            }
        ]
    },
    
]