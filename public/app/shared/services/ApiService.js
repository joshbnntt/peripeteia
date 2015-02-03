var api = angular.module('ApiService',['AuthSrvc']);
 
auth.factory('Api',function($http, $q, $window, $location, $rootScope, AuthenticationService){
   function call_api_method(method, api_url, parameters)
   {
      var userInfo = AuthenticationService.getUserInfo();
      var credentials = "Basic " + btoa(userInfo.user + ":" + userInfo.password);

      return $http({
         method: method,
         url: '/api/' + api_url,
         params: parameters,
         headers: {
               Authorization: credentials
            }
      });  
   }   
   return {
      call_api_method : call_api_method
   };
});