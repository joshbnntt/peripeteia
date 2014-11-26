app.service('HomeService', [])
   .factory('Display', function($http, AuthenticationService) {
      return {
         // get all the comments
         display : function() {
            userInfo = AuthenticationService.getUserInfo();
            credentials = "Basic " + btoa(userInfo.user + ":" + userInfo.password);

            return $http(
               {
                  method: "POST",
                  url: "/api/display",
                  headers: {
                     Authorization: credentials
                  }
               })
         }         
      }
   });