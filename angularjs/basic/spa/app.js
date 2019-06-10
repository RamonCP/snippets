const app = angular.module('app', ['ngRoute'])

app.config(function($routeProvider){
    $routeProvider
    .when('/',{
        templateUrl: 'home.html'
    })
    .when('/contato', {
        templateUrl: 'contato.html'
    })

    .otherwise({ redirectTo: '/' })
})