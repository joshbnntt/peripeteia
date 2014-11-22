var app = angular.module('peri', ['ngRoute', 'LoginCtrl', 'AuthSrvc', 'angucomplete-alt', 'angularSpinner']);

app.config(function($routeProvider, $locationProvider) {
   $routeProvider
      .when('/home', {
         templateUrl : 'app/components/home/Home.php',
         controller  : 'HomeController'
      })
      .when('/createoutline', {
         templateUrl : 'app/components/courseOutlineForm/CourseOutlineForm.php',
         controller  : 'CourseOutlineController'
      })
      .when('/', {
         templateUrl : 'app/components/login/LoginForm.php',
         controller  : 'LoginController'
      });
      $locationProvider.html5Mode({
         enabled: true,
         requireBase: false
      });
});