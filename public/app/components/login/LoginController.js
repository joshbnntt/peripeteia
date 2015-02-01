var login = angular.module('LoginCtrl',[]);
 
login.controller('LoginController',function($scope, $q, $window, $location, AuthenticationService){
   $scope.$on('$viewContentLoaded', function() {
      if ($window.sessionStorage["userInfo"] === null)
      {
         $location.path("/home")
      }
      return;
   });
   
   $scope.loginSubmit = function(){
   AuthenticationService.login($scope.loginData)
      .then(function(response){
         $scope.userInfo = response;
         $location.path("/home");
         console.log(response);
      },
      function(error){
         $scope.authError = error;
         console.log(error);
      });
   }   
});