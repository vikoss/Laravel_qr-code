import { baseURL } from './../baseURL'

export function deleteTax(uuid, token) {
    return axios.get(`${baseURL}/nicolas_romero/delete_tax/${uuid}`,{
        headers: {
            Authorization: `Bearer ${token}`
        }})
        .then(response => response.data)
        .catch(error => console.error(error))
}