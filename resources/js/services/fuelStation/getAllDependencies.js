import { baseURL } from './../baseURL'

export function getDependencies(token) {
    return axios.get(`${baseURL}/fuel_station/get_all_dependencies`, {
        headers: {
            Authorization: `Bearer ${token}`
        }})
        .then(response => response.data)
        .catch(error => console.error(error))
}