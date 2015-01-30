app.controller('CourseOutlineController', function($scope, $http, $window, $location, CourseOutline, usSpinnerService) {
  $scope.master = {};
  $scope.test = {};
  $scope.outline = { 
                      course_name: "Data Structures and Algorithms",
                      credit_hours: "3",
                      instructor_name: "Robert Howell",
                      office_location: "AC 214",
                      office_hours: "T IV",
                      email: "rhowell@faculty.pcci.edu",
                      course_description: "A Hard class with a Hard teacher",
                      course_prerequisites: "Better be good at what you do",
                      course_texts: "THE SUPPLEMENT",
                      course_outcomes: "Know Pointer Arithmetic" 
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
      // if($scope.outline.course_name['title'])
      // {
      //   $scope.outline.course_name = $scope.outline.course_name['title'];
      // }
      // if($scope.outline.instructor_name['title'])
      // {
      //   $scope.outline.instructor_name = $scope.outline.instructor_name['title'];
      // }
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
            else if(data < 50)
            {
              $scope.errors = "There was a problem generating the outline.";
            }
            else
            {
              $scope.stopSpin();
              $scope.outline = angular.copy();
              //$window.location.href = data;
              $window.open(data, '_blank');
            }
            
            
         })
         .error(function(data)
         {
            $scope.stopSpin();
            $scope.answer = data;
         });
  };
});