import { baseURL } from './../baseURL'

export function getDependencies() {
    return axios.get(`${baseURL}/fuel_station/get_dependencies`)
        .then(response => response.data)
        .catch(error => console.error(error))
}