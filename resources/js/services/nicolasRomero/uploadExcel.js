import { baseURL } from './../baseURL'

export function uploadExcel(file) {
    return axios.post(`${baseURL}/nicolas_romero/upload_excel`, file)
        .then(response => response.data)
        .catch(error => console.error(error))
}