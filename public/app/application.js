var app = angular.module('peri', ['ngRoute', 'LoginCtrl', 'AuthSrvc', 'angucomplete-alt', 'angularSpinner', 'ApiService']);

app.config(function($routeProvider, $locationProvider) {
   $routeProvider
      .when('/home', {
         templateUrl : 'app/components/home/Home.php',
         controller  : 'HomeController',
         resolve: {
            auth: function ($q, AuthenticationService) {
                var userInfo = AuthenticationService.getUserInfo();
                if (userInfo.csrf_token) {
                    return $q.when(userInfo);
                } else {
                    return $q.reject({ authenticated: false });
                }
            }
        }
      })
      .when('/createoutline', {
         templateUrl : 'app/components/courseOutlineForm/CourseOutlineForm.php',
         controller  : 'CourseOutlineController',
         resolve: {
            auth: function ($q, AuthenticationService) {
                var userInfo = AuthenticationService.getUserInfo();
                if (userInfo.csrf_token) {
                    return $q.when(userInfo);
                } else {
                    return $q.reject({ authenticated: false });
                }
            }
        }
      })
      .when('/teacherdirectorysearch', {
         templateUrl : 'app/components/directories/teacherdirectory.php',
         controller  : 'TeacherDirectoryController',
         resolve: {
            auth: function ($q, AuthenticationService) {
                var userInfo = AuthenticationService.getUserInfo();
                if (userInfo.csrf_token) {
                    return $q.when(userInfo);
                } else {
                    return $q.reject({ authenticated: false });
                }
            }
        }
      })
      .when('/', {
         templateUrl : 'app/components/login/LoginForm.php',
         controller  : 'LoginController'
      })
      .otherwise('/', {
         templateUrl : 'app/components/login/LoginForm.php',
         controller  : 'LoginController'
      });
      $locationProvider.html5Mode({
         enabled: true,
         requireBase: false
      });
});

app.run(["$rootScope", "$location", function ($rootScope, $location) {

    $rootScope.$on("$routeChangeSuccess", function (userInfo) {
        console.log(userInfo);
    });

    $rootScope.$on("$routeChangeError", function (event, current, previous, eventObj) {
        if (eventObj.authenticated === false) {
            $location.path("/");
        }
    });
}]);