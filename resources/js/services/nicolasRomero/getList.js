import { baseURL } from './../baseURL'

export function getList(page, token) {
    return axios.get(`${baseURL}/nicolas_romero/get_list?page=${page}`, {
        headers: {
            Authorization: `Bearer ${token}`
        }})
        .then(response => response.data)
        .catch(error => console.error(error))
}