import { baseURL } from './../baseURL'

export function getPDF(payload, token) {
    return axios.post(`${baseURL}/nicolas_romero/view_pdf`, payload, {
        headers: {
            Authorization: `Bearer ${token}`
        }})
        .then(response => response.data)
        .catch(error => console.error(error))
}