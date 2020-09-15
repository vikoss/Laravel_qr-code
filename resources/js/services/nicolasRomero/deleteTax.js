import { baseURL } from './../baseURL'

export function deleteTax(uuid) {
    return axios.get(`${baseURL}/nicolas_romero/delete_tax/${uuid}`)
        .then(response => response.data)
        .catch(error => console.error(error))
}