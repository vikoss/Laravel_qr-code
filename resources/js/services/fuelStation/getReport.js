import { baseURL } from './../baseURL'

export function getReport(payload) {
    return axios.post(`${baseURL}/fuel_station/get_report`,payload)
        .then(response => response.data)
        .catch(error => console.error(error))
}