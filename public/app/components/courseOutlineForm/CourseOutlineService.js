app.service('CourseOutlineService', [])
   .factory('CourseOutline', function($http) {
      return {
         // get all the comments
         save : function(outline) {
            return $http({
               method: 'POST',
               url: '/api/courseoutline',
               params: outline
            });
         }        
      }
   });