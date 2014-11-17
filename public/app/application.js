var app = angular.module('peri', ['ngRoute', 'angucomplete']);

app.config(function($routeProvider, $locationProvider) {
   $routeProvider
      .when('/', {
         templateUrl : 'app/components/home/Home.php',
         controller  : 'HomeController'
      })
      .when('/createoutline', {
         templateUrl : 'app/components/courseOutlineForm/CourseOutlineForm.php',
         controller  : 'CourseOutlineController'
      });
      $locationProvider.html5Mode({
         enabled: true,
         requireBase: false
      });
});