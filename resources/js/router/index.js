import fuelStationRoutes from './modules/FuelStation'
import nicolasRomeroRoutes from './modules/NicolasRomero'
import paysheetRoutes from './modules/Paysheet'
import othersRoutes from './modules/Others'


export const routes = [
  ...fuelStationRoutes,
  ...nicolasRomeroRoutes,
  ...paysheetRoutes,
  ...othersRoutes,
]