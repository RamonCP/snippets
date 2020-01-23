const contatos = angular.module('contatosApp', [])

contatos.controller('contatosController', function($scope){
    $scope.contatos = [
        { id: 1, name: "Ramon", email: "Rasasds@asdad.com", telefone: "1123123123" },
        { id: 2, name: "Lucas", email: "luas@asdad.com", telefone: "87876776" },
        { id: 3, name: "Edi", email: "edi@asdad.com", telefone: "45356545" }
    ]
    $scope.novoContato = {}
    $scope.titleModal = "Adicionar um novo contato"
    
    $scope.novoIdDoNovoContato = $scope.contatos[ $scope.contatos.length - 1 ].id + 1
    
    $scope.addNovoContato = function(){
        $scope.contatos.push({
            id: $scope.novoIdDoNovoContato,
            name: $scope.novoContato.nome, 
            email: $scope.novoContato.email, 
            telefone: $scope.novoContato.telefone 
        })
        $scope.novoContato = {}

        $scope.novoIdDoNovoContato++
    }

    $scope.removeContato = function(id){
        $scope.contatos = $scope.contatos.filter((el) => {
            return id != el.id
        })
    }
})