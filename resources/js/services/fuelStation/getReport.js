import { baseURL } from './../baseURL'

export function getReport(payload, token) {
    return axios.post(`${baseURL}/fuel_station/get_report`, payload, {
        headers: {
            Authorization: `Bearer ${token}`
        }})
        .then(response => response.data)
        .catch(error => console.error(error))
}