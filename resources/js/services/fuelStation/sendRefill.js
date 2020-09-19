import { baseURL } from './../baseURL'

export function sendRefill(refill) {
    return axios.post(`${baseURL}/fuel_station/save_refill`,refill)
        .then(response => response.data)
        .catch(error => console.error(error))
}