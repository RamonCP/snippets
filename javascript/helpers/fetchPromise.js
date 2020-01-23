const urlApi = 'https://api.github.com/users/ramoncp/repos'

function getUsers(){
    console.log(urlApi)
    return fetch(urlApi)
}

const users = getUsers()
users
    .then((response)=>{
        if ( response.ok ) {
            console.log(response)
            return 
        }
        throw new Error(response.statusText)
    })
    .catch((err) => {
        console.error(err)
    })