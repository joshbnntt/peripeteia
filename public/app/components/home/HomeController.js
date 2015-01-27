app.controller('HomeController', function($scope, $http, $window, $location, Display, AuthenticationService) {
   $scope.userInfo = angular.fromJson($window.sessionStorage["userInfo"]);

   Display.display($scope.userInfo)
         .success(function(data) {
            $scope.course_outlines = data;
         })
         .error(function(error){
            console.log(error);
            $location.path("/");
         });
});