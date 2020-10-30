import { baseURL } from './../baseURL'

export function getBitacora(payload, token) {
    return axios.post(`${baseURL}/fuel_station/get_bitacora`, payload, {
        headers: {
            Authorization: `Bearer ${token}`
        }})
        .then(response => response.data)
        .catch(error => console.error(error))
}