import Login from './components/auth/Login'

import IndexNicolasRomero from './pages/nicolasRomero/Index'
import ListOfCodes from './pages/nicolasRomero/ListOfCodes'
import ImportExcel from './pages/nicolasRomero/ImportExcel'
import ViewDetails from './pages/nicolasRomero/ViewDetails'
import ViewPDF from './pages/nicolasRomero/ViewPDF'

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
                path: 'codigo_qr',
                component: ViewPDF,
            },
            {
                path: 'ver_vigencia/:uuid/:type',
                component: ViewDetails,
            },
        ]
    },
    {
        path: '/gasolinera',
        component: ListOfCodes,
        meta: {
            requiresAuth: true,
            fuelStationAuth: true
        },
        children: [
            {
                path: '/importar_excel',
                component: ImportExcel,
            },
            {
                path: '/codigo_qr',
                component: ViewPDF,
            },
            {
                path: '/ver_vigencia',
                component: ViewDetails,
            },
        ]
    },
    
]