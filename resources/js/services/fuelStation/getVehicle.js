import { baseURL } from './../baseURL'

export function getVehicle(uuid) {
    return axios.get(`${baseURL}/fuel_station/get_vehicle/${uuid}`)
        .then(response => response.data)
        .catch(error => console.error(error))
}