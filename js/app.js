var app = angular.module('monolitosSiteApp', ['ngRoute']);

app.config(function($routeProvider){
    $routeProvider
    
    .when('/', {        
        templateUrl: 'inicio.html',
        controller: 'mainController'         
    })
    .when('/sobre', {
        templateUrl: 'sobre.html',
        controller: 'mainController'
    })
    .when('/servicos',{
        templateUrl: 'servicos.html', 
        controller: 'mainController'
    } )
    .when('/contato', {
        templateUrl:'contato.html',
        controller:'mainController'
    });
    
    
});
app.controller('mainController', function($scope){
  
});