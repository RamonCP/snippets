var App = {

    ola: function(nome) {
        console.log('Olá ' + nome)
    },

    andar: function (option) {
        console.log("Andando...")
    },

    falar: {
        fala1: function() {
            console.log("Oi tudo bem ?")
        }
    }

}

// App.ola()

var Pessoa = Object.create(App)
Pessoa.andar()
Pessoa.ola("Ramon")

var Pessoa2 = Pessoa
Pessoa2.andar()
Pessoa2.ola("Lucas")