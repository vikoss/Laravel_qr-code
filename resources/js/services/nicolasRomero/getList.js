import { baseURL } from './../baseURL'

export function getList(page) {
    return axios.get(`${baseURL}/nicolas_romero/get_list?page=${page}`)
        .then(response => response.data)
        .catch(error => console.error(error))
}