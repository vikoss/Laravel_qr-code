import { baseURL } from './../baseURL'

export function getVehicle(uuid, token) {
    return axios.get(`${baseURL}/fuel_station/get_vehicle/${uuid}`, {
        headers: {
            Authorization: `Bearer ${token}`
        }})
        .then(response => response.data)
        .catch(error => console.error(error))
}