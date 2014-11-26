app.service('HomeService', [])
   .factory('Display', function($http) {
      return {
         // get all the comments
         display : function(userInfo) {
            return $http(
               {
                  method: "GET",
                  url: "/api/display",
                  headers: {
                     HTTP_AUTHORIZATION: userInfo.csrf_token //"uWd1q7HK8YnQ0eJoi9XX2VG64j4uaUWOeQJ3Gf5R" 
                  }
                  //params: { access_token: userInfo.csrf_token }
               })
         }         
      }
   });