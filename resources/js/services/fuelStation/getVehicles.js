import { baseURL } from './../baseURL'

export function getVehicles(token) {
    return axios.get(`${baseURL}/fuel_station/get_vehicles`, {
        headers: {
            Authorization: `Bearer ${token}`
        }})
        .then(response => response.data)
        .catch(error => console.error(error))
}