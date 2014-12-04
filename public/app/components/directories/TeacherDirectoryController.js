app.controller('TeacherDirectoryController', function($scope, $http, $window, $location, TeacherDirectory, usSpinnerService) {
 
  $scope.startSpin = function(){
      usSpinnerService.spin('spinner-1');
  }
  $scope.stopSpin = function(){
      usSpinnerService.stop('spinner-1');
  }
  $scope.search = function()
  {
      $scope.startSpin();
      TeacherDirectory.search($scope.filter_text)
         .success(function(data)
         {
            //if returns with validation errors
            if(data.errors)
            {
              $scope.errors = data.errors;
              $scope.stopSpin();
            }
            else
            {
              $scope.stopSpin();
              $window.location.href = data;
            }
         })
         .error(function(data)
         {
            $scope.stopSpin();
            $scope.answer = data;
         });
  };
});