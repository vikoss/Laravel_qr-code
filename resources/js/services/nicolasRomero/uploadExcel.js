import { baseURL } from './../baseURL'

export function uploadExcel(file, token) {
    return axios.post(`${baseURL}/nicolas_romero/upload_excel`, file, {
        headers: {
            Authorization: `Bearer ${token}`
        }})
        .then(response => response.data)
        .catch(error => console.error(error))
}