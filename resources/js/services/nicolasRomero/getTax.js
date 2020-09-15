import { baseURL } from './../baseURL'

export function getTax(pathName) {
    return axios.get(`${baseURL}/nicolas_romero/ver_vigencia/${pathName}`)
        .then(response => response.data)
        .catch(error => console.error(error))
}