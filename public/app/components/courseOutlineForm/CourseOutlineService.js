app.service('CourseOutlineService', [])
   .factory('CourseOutline', function($http, AuthenticationService) {
      return {
         // get all the comments
         save : function(outline) {
            userInfo = AuthenticationService.getUserInfo();
            credentials = "Basic " + btoa(userInfo.user + ":" + userInfo.password);
            return $http({
               method: 'POST',
               url: '/api/courseoutline/store',
               params: outline,
               headers: {
                     Authorization: credentials
                  }
            });
         }        
      }
   });