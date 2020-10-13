import { baseURL } from './../baseURL'

export function getBitacora(payload) {
    return axios.post(`${baseURL}/fuel_station/get_bitacora`,payload)
        .then(response => response.data)
        .catch(error => console.error(error))
}