import { baseURL } from './../baseURL'

export function getVehicles() {
    return axios.get(`${baseURL}/fuel_station/get_vehicles`)
        .then(response => response.data)
        .catch(error => console.error(error))
}