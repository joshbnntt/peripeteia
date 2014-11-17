app.controller('CourseOutlineController', function($scope, $http, $window, $location, CourseOutline) {
  $scope.master = {};
  $scope.create = function()
  {
      $scope.answer = "loading";
      $scope.a = angular.copy($scope.outline);
      $scope.a['course_name'] = $scope.a['course_name']['title'];
      $scope.a['instructor_name'] = $scope.a['instructor_name']['title'];
      CourseOutline.save($scope.a)
         .success(function(data)
         {
            $window.location.href = data;
         })
         .error(function(data)
         {
            $scope.answer = data;
         });
  };
});