import axios from "axios";

export function login(credentials) {
    return axios.post('api/auth/login', credentials)
        .then(response => response.data)
        .catch(error => console.error(error))
}