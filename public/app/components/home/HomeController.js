app.controller('HomeController', function($scope, $http, $window, $location, Display, AuthenticationService) {
   $scope.userInfo = angular.fromJson($window.sessionStorage["userInfo"]);
   //$scope.userInfo = $window.sessionStorage["userInfo"];

   Display.display($scope.userInfo)
         .success(function(data) {
            $scope.course_outlines = data;
         })
         .error(function(error){
            console.log(error);
            $location.path("/");
         });

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