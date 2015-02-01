app.directive('periTopbar', function(AuthenticationService) {
   return {
      restrict: 'A',
      templateUrl: 'app/shared/partials/topbar.php',
      scope: true,
      link: 
         function (scope, elem, attrs) {
            scope.userInfo = AuthenticationService.getUserInfo();
            scope.$on('userLoggedIn', function (event, args) {
                  scope.userInfo = args;
            });
            scope.$on('userLoggedOut', function (event) {
                scope.userInfo = false;
            });
         }
   };
});
