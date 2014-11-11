app.controller('HomeController', function($scope, $http, CourseOutline) {
  CourseOutline.display()
         .success(function(data) {
            $scope.course_outlines = data;
         });
});