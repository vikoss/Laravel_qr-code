import { baseURL } from './../baseURL'

export function getPDF(payload) {
    return axios.post(`${baseURL}/nicolas_romero/view_pdf`, payload)
        .then(response => response.data)
        .catch(error => console.error(error))
}