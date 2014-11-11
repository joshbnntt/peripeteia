app.service('HomeService', [])
   .factory('CourseOutline', function($http) {
      return {
         // get all the comments
         display : function() {
            return $http.get('/api/display');
         }         
      }
   });