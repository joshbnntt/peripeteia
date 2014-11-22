var login = angular.module('AuthSrvc',[]);
 
login.factory('Login',function($http){
   return{
      auth:function(credentials){
         var authUser = $http({
            method:'POST',
            url:'api/login',
            params:credentials
         });
         return authUser;
      }
   }
});