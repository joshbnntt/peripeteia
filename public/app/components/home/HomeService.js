app.service('HomeService', [])
   .factory('Display', function($http) {
      return {
         // get all the comments
         display : function() {
            return $http.get('/api/display');
         }         
      }
   });