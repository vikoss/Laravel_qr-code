import { post } from 'axios'

export default (credentials) => post('api/auth/login', credentials)