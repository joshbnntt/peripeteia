app.controller('CourseOutlineController', function($scope, $http, $window, $location, CourseOutline) {
  $scope.master = {};
  $scope.create = function()
  {
      $scope.answer = "loading";
      CourseOutline.save($scope.outline)
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