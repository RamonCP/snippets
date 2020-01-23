const serviceApp = angular.module('serviceApp',[])

serviceApp.service('serviceExApp', function(){
    const estados = [
        { name: "São Paulo", capital: "São Paulo", renda: 2999 },
        { name: "Rio de Janeiro", capital: "Rio de Janeiro", renda: 2599.99 },
        { name: "Minas Gerais", capital: "Belo Horizonte", renda: 2000 },
        { name: "Santa Catarina", capital: "Florianópolis", renda: 3299.99 }
    ]

    this.getToday = function(){
        return new Date()
    }   

    this.getStates = function(){
        return estados
    }

    this.getTextReduced = function(){
        return `Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto repellendus eum 
explicabo sunt eos nostrum dolor dicta placeat aspernatur quis, dolorem voluptates?
Quibusdam voluptatem quae, facilis debitis amet velit porro?`
    }
})

serviceApp.controller('filtroController',function($scope, serviceExApp){
    $scope.filtro = ""

    $scope.estado = serviceExApp.getStates()
    $scope.dataHoje = serviceExApp.getToday()
    $scope.textoLimitado = serviceExApp.getTextReduced()
    console.log($scope.estado)    
})