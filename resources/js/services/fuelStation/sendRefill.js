import { baseURL } from './../baseURL'

export function sendRefill(refill, token) {
    return axios.post(`${baseURL}/fuel_station/save_refill`, refill, {
        headers: {
            Authorization: `Bearer ${token}`
        }})
        .then(response => response.data)
        .catch(error => console.error(error))
}