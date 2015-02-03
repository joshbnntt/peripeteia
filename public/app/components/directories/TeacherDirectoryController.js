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
      var s = { 's' : $scope.filterText};
      TeacherDirectory.searchTeacher(s)
         .success(function(data)
         {
            $scope.stopSpin();
            //if returns with validation errors
            if(data.errors)
            {
              $scope.errors = data.errors;
            }
            else
            {
              $scope.users = data;              
            }
         })
         .error(function(data)
         {
            $scope.stopSpin();
            console.log(data);
            //$scope.errors = data;
         });
  };
});