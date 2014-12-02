app.controller('CourseOutlineController', function($scope, $http, $window, $location, CourseOutline, usSpinnerService) {
  $scope.master = {};
  $scope.test = {};
  $scope.outline = { 
                      course_name: "DataStruc",
                      credit_hours: "2", 
                      instructor_name: "DrasdfHowell",
                      office_location: "AC345", 
                      office_hours: "TIII", 
                      email: "joshbnntt@peri.com", 
                      course_description: "safd", 
                      course_prerequisites: "asdg", 
                      course_texts: "asfg", 
                      course_outcomes: "asgwerdsasdgfewasd" 
                    };
  $scope.startSpin = function(){
      usSpinnerService.spin('spinner-1');
  }
  $scope.stopSpin = function(){
      usSpinnerService.stop('spinner-1');
  }
  $scope.create = function()
  {
      $scope.startSpin(); 
      if($scope.outline.course_name['title'])
      {
        $scope.outline.course_name = $scope.outline.course_name['title'];
      }
      if($scope.outline.instructor_name['title'])
      {
        $scope.outline.instructor_name = $scope.outline.instructor_name['title'];
      }
      CourseOutline.save($scope.outline)
         .success(function(data)
         {
            //if returns with validation errors
            if(data.errors)
            {
              $scope.errors = data.errors;
              $scope.answer = data;
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