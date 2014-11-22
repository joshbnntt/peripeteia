// script.js
    // create the module and name it peri
        // also include ngRoute for all our routing needs
    var app = angular.module('peri', ['ngRoute']);
   
    // configure our routes
    app.config(function($routeProvider) {
      $routeProvider
         .when('/', {
            templateUrl : 'pages/home.php',
            controller  : 'mainController'
         });
   });
    // create the controller and inject Angular's $scope
    app.controller('mainController', function($scope) {
        // create a message to display in our view
        $scope.message = 'Welcome to Peripeteia';
    });