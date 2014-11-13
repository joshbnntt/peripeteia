var app = angular.module('peri', ['ngRoute']);

app.config(function($routeProvider, $locationProvider) {
   $routeProvider
      .when('/', {
         templateUrl : 'app/components/home/home.php',
         controller  : 'HomeController'
      })
      .when('/createoutline', {
         templateUrl : 'app/components/courseOutlineForm/courseOutlineForm.php',
         controller  : 'CourseOutlineController'
      });
      $locationProvider.html5Mode({
         enabled: true,
         requireBase: false
      });
});