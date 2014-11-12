app.controller('HomeController', function($scope, $http, Display) {
   Display.display()
         .success(function(data) {
            $scope.course_outlines = data;
         });
});