app.service('CourseOutlineService', [])
   .factory('CourseOutline', function($http) {
      return {
         // get all the comments
         save : function(data) {
            return $http({
               method: 'POST',
               url: '/api/store',
               data: $.param(data)
            });
         }        
      }
   });