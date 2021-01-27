function getLocalUser() {
  const userString = localStorage.getItem('user-qr-codes')
  if (!userString) {
    return null
  }
  return JSON.parse(userString)
}

export default getLocalUser()