app.directive('periTopbar', function() {
   return {
      restrict: 'A',
      templateUrl: 'app/shared/partials/topbar.php',
      controller : 'PeriTopbarController'
   };
}).controller('PeriTopbarController', function($scope, $window){
   $scope.userInfo = angular.fromJson($window.sessionStorage["userInfo"]);
});
