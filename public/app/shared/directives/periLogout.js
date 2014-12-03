app.directive('periLogout', function() {
   return {
      restrict: 'A',
      template: '<a ng-click="logout()">Logout</a>',
      controller : 'PeriLogoutController'
   };
}).controller('PeriLogoutController', function($scope, $window, $location, AuthenticationService){
   $scope.logout = function () {
     AuthenticationService.logout()
         .success(function (responce) 
         {
             $scope.userInfo = null;
             $location.path("/");
         })
         .error(function (responce) 
         {
             console.log(response);
         });
   };
});