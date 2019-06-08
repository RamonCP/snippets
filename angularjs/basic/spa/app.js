const app = angular.module('app',['ngRoute'])

app.config(function($routeProvider){
    $routeProvider
    .when('/',{
        templateUrl: 'home.html',
        controller: 'HomeController'
    })
    .when('/contato',{
        templateUrl: 'contato.html',
        controller: 'ContatoController'
    })
    .otherwise({ redirectTo: '/' })
})

app.controller('HomeController',function($scope){
    $scope.message = "Olá"
})

app.controller('ContatoController',function($scope){
    $scope.message = "Olá contato"
})