app.controller('HomeController', function($scope, $http, $window, $location, Home, AuthenticationService) {
   $scope.userInfo = angular.fromJson($window.sessionStorage["userInfo"]);

   /**
   * Displays all availeble CourseOutlines.
   * 
   * @param $scope.userInfo
   */
   Home.display($scope.userInfo)
      .success(function(data) {
         $scope.course_outlines = data;
      })
      .error(function(error){
         console.log(error);
         $location.path("/");
      });
});