const urlApi = 'https://api.github.com/users/ramoncp/repos'

function getUsers(){
    return fetch(urlApi)
}

const users = getUsers()
users
    .then((response) => {
        if ( response.ok ) {
            return response.json()
        }
        throw new Error(response.statusText)
    })
    .then((response)=>{
        console.log(response)
    })
    .catch((err) => {
        console.error(err)
    })