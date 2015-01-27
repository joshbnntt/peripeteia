app.service('TeacherDirectoryService', [])
   .factory('TeacherDirectory', function($http, AuthenticationService) {
      return {
         // get all the comments
         search : function(filterText) {
            userInfo = AuthenticationService.getUserInfo();
            credentials = "Basic " + btoa(userInfo.user + ":" + userInfo.password);
            return $http({
               method: 'POST',
               url: '/api/directory/search',
               params: filterText,
               headers: {
                     Authorization: credentials
                  }
            });
         }        
      }
   });