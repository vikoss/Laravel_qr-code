import Login from './components/auth/Login'

import IndexNicolasRomero from './pages/nicolasRomero/Index'
import ListOfCodes from './pages/nicolasRomero/ListOfCodes'
import ImportExcel from './pages/nicolasRomero/ImportExcel'
import ViewDetails from './pages/nicolasRomero/ViewDetails'

import IndexFuelStationOffice from './pages/fuelStation/IndexOffice'
import GenerateBitacora from './pages/fuelStation/GenerateBitacora'
import GenerateReport from './pages/fuelStation/GenerateReport'

import IndexFuelStationOperation from './pages/fuelStation/IndexOperation'
import Refill from './pages/fuelStation/Refill'
import ScanQRCode from './pages/fuelStation/ScanQRCode'

export const routes = [
    
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
    }
    
]